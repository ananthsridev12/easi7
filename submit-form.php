<?php
/**
 * Handles every contact/lead form on the site (the /contact page form, the
 * closing stats+form panel included on every service page, and the homepage
 * hero lead form). Writes straight to MySQL - see db/schema.sql for the
 * table this expects.
 *
 * On success, redirects to /thank-you with the tracking fields (service,
 * subservice, UTMs, click IDs, lead_id) appended as query params so that
 * page can fire a GTM dataLayer 'lead_submitted' event with real data.
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

// Simple field: read, trim, cap length. Empty string becomes null.
function readField(string $key, int $maxLen): ?string
{
    $v = trim((string)($_POST[$key] ?? ''));
    if ($v === '') {
        return null;
    }
    return mb_substr($v, 0, $maxLen);
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    fieldError('Name, email, and message are required.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    fieldError('That email address doesn\'t look right.');
}

$name = mb_substr($name, 0, 255);
$email = mb_substr($email, 0, 255);

$fields = [
    'phone' => readField('phone', 50),
    'service' => readField('service', 255),
    'subservice' => readField('subservice', 255),
    'subject' => readField('subject', 255),
    'source_page' => readField('page', 500) ?? mb_substr((string)($_SERVER['HTTP_REFERER'] ?? ''), 0, 500) ?: null,
    'form_location' => readField('form_location', 100),
    'utm_source' => readField('utm_source', 255),
    'utm_medium' => readField('utm_medium', 255),
    'utm_campaign' => readField('utm_campaign', 255),
    'utm_term' => readField('utm_term', 255),
    'utm_content' => readField('utm_content', 255),
    'gclid' => readField('gclid', 255),
    'fbclid' => readField('fbclid', 255),
];
$ip = $_SERVER['REMOTE_ADDR'] ?? null;

try {
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
    $pdo = new PDO($dsn, $config['user'], $config['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    $stmt = $pdo->prepare(
        'INSERT INTO form_submissions
            (name, email, phone, service, subservice, subject, message, source_page, form_location,
             utm_source, utm_medium, utm_campaign, utm_term, utm_content, gclid, fbclid, ip_address)
         VALUES
            (:name, :email, :phone, :service, :subservice, :subject, :message, :source_page, :form_location,
             :utm_source, :utm_medium, :utm_campaign, :utm_term, :utm_content, :gclid, :fbclid, :ip_address)'
    );
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $fields['phone'],
        ':service' => $fields['service'],
        ':subservice' => $fields['subservice'],
        ':subject' => $fields['subject'],
        ':message' => $message,
        ':source_page' => $fields['source_page'],
        ':form_location' => $fields['form_location'],
        ':utm_source' => $fields['utm_source'],
        ':utm_medium' => $fields['utm_medium'],
        ':utm_campaign' => $fields['utm_campaign'],
        ':utm_term' => $fields['utm_term'],
        ':utm_content' => $fields['utm_content'],
        ':gclid' => $fields['gclid'],
        ':fbclid' => $fields['fbclid'],
        ':ip_address' => $ip,
    ]);
    $leadId = $pdo->lastInsertId();
} catch (PDOException $e) {
    error_log('submit-form.php DB error: ' . $e->getMessage());
    http_response_code(500);
    exit('Something went wrong on our end - please email us directly instead.');
}

// Carry the tracking fields through to /thank-you as query params so it can
// fire a GTM dataLayer event with real values. Only non-empty ones are added.
$trackingFields = $fields;
$trackingFields['lead_id'] = (string)$leadId;
$query = [];
foreach ($trackingFields as $key => $value) {
    if ($value !== null && $value !== '') {
        $query[$key] = $value;
    }
}

header('Location: /thank-you' . ($query ? ('?' . http_build_query($query)) : ''));
exit;
