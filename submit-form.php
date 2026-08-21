<?php
/**
 * Handles every contact/lead form on the site (the /contact page form and the
 * closing stats+form panel included on every service page). Writes straight
 * to MySQL - see db/schema.sql for the table this expects.
 *
 * Config (host/db name/user/password/admin password) is loaded from a file
 * OUTSIDE the web root, so it can never be served even by accident:
 *   /home1/de2shrnx/db-config.php
 * See db-config.example.php in this repo for the template - that real file
 * is never committed to git.
 */

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed.');
}

$configPath = dirname(__DIR__) . '/db-config.php';
if (!is_file($configPath)) {
    http_response_code(500);
    exit('Form is not configured yet.');
}
$config = require $configPath;

// Honeypot: a hidden field named "website" that real visitors never fill in.
// Bots that auto-fill every field will trip it. Pretend success, don't store.
if (!empty($_POST['website'])) {
    header('Location: /thank-you');
    exit;
}

function fieldError(string $message): void
{
    http_response_code(422);
    header('Content-Type: text/html; charset=utf-8');
    $safe = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo "<!doctype html><html><head><meta charset=\"utf-8\"><title>Form error</title></head>"
        . "<body style=\"font-family:sans-serif;max-width:520px;margin:80px auto;text-align:center;\">"
        . "<h1>Something's missing</h1><p>{$safe}</p>"
        . "<p><a href=\"javascript:history.back()\">Go back and try again</a></p></body></html>";
    exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$service = trim((string)($_POST['service'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));
$sourcePage = trim((string)($_POST['page'] ?? ($_SERVER['HTTP_REFERER'] ?? '')));

if ($name === '' || $email === '' || $message === '') {
    fieldError('Name, email, and message are required.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    fieldError('That email address doesn\'t look right.');
}

// Cap lengths defensively - matches the column sizes in schema.sql.
$name = mb_substr($name, 0, 255);
$email = mb_substr($email, 0, 255);
$phone = mb_substr($phone, 0, 50);
$service = mb_substr($service, 0, 255);
$subject = mb_substr($subject, 0, 255);
$sourcePage = mb_substr($sourcePage, 0, 500);
$ip = $_SERVER['REMOTE_ADDR'] ?? null;

try {
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
    $pdo = new PDO($dsn, $config['user'], $config['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    $stmt = $pdo->prepare(
        'INSERT INTO form_submissions (name, email, phone, service, subject, message, source_page, ip_address)
         VALUES (:name, :email, :phone, :service, :subject, :message, :source_page, :ip_address)'
    );
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone !== '' ? $phone : null,
        ':service' => $service !== '' ? $service : null,
        ':subject' => $subject !== '' ? $subject : null,
        ':message' => $message,
        ':source_page' => $sourcePage !== '' ? $sourcePage : null,
        ':ip_address' => $ip,
    ]);
} catch (PDOException $e) {
    error_log('submit-form.php DB error: ' . $e->getMessage());
    http_response_code(500);
    exit('Something went wrong on our end - please email us directly instead.');
}

header('Location: /thank-you');
exit;
