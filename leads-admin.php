<?php
/**
 * Minimal password-protected viewer for form_submissions. Not linked from
 * anywhere on the site - bookmark the URL. Session-based login using the
 * admin_password set in db-config.php (outside the web root).
 */

declare(strict_types=1);
session_start();

$configPath = dirname(__DIR__) . '/db-config.php';
if (!is_file($configPath)) {
    http_response_code(500);
    exit('Not configured yet.');
}
$config = require $configPath;

function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// Handle login
if (isset($_POST['admin_password'])) {
    if (hash_equals((string)$config['admin_password'], (string)$_POST['admin_password'])) {
        $_SESSION['leads_admin_ok'] = true;
    } else {
        $loginError = 'Wrong password.';
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: /leads-admin.php');
    exit;
}

$loggedIn = !empty($_SESSION['leads_admin_ok']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow">
<title>Leads</title>
<style>
  body{font-family:-apple-system,Segoe UI,Roboto,sans-serif;background:#F5F6F8;color:#12141C;margin:0;padding:40px 20px;}
  .wrap{max-width:1100px;margin:0 auto;}
  h1{font-size:1.4rem;margin-bottom:1em;}
  form.login{max-width:320px;margin:80px auto;background:#fff;padding:28px;border-radius:10px;border:1px solid #ddd;}
  form.login input{width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:6px;box-sizing:border-box;}
  form.login button{width:100%;padding:10px;background:#12141C;color:#fff;border:none;border-radius:6px;cursor:pointer;}
  .error{color:#B3261E;font-size:0.9rem;}
  table{width:100%;border-collapse:collapse;background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 1px 3px rgba(0,0,0,0.08);}
  th,td{text-align:left;padding:10px 12px;border-bottom:1px solid #eee;font-size:0.88rem;vertical-align:top;}
  th{background:#12141C;color:#fff;font-weight:600;}
  tr:last-child td{border-bottom:none;}
  .msg{max-width:320px;white-space:pre-wrap;}
  .top-bar{display:flex;justify-content:space-between;align-items:center;margin-bottom:1.2em;}
  .top-bar a{color:#12141C;font-size:0.85rem;}
  .empty{color:#666;padding:40px;text-align:center;}
</style>
</head>
<body>
<div class="wrap">
<?php if (!$loggedIn): ?>
  <form class="login" method="post">
    <h1>Leads login</h1>
    <?php if (!empty($loginError)): ?><p class="error"><?= h($loginError) ?></p><?php endif; ?>
    <input type="password" name="admin_password" placeholder="Password" required autofocus>
    <button type="submit">Log in</button>
  </form>
<?php else: ?>
  <div class="top-bar">
    <h1 style="margin:0;">Form submissions</h1>
    <a href="/leads-admin.php?logout=1">Log out</a>
  </div>
  <?php
  try {
      $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
      $pdo = new PDO($dsn, $config['user'], $config['password'], [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
      $rows = $pdo->query('SELECT * FROM form_submissions ORDER BY created_at DESC LIMIT 500')->fetchAll();
  } catch (PDOException $e) {
      error_log('leads-admin.php DB error: ' . $e->getMessage());
      echo '<p class="error">Could not load submissions - check the server error log.</p>';
      $rows = [];
  }
  ?>
  <?php if (empty($rows)): ?>
    <p class="empty">No submissions yet.</p>
  <?php else: ?>
  <table>
    <thead><tr>
      <th>Date</th><th>Name</th><th>Email</th><th>Phone</th><th>Service</th><th>Message</th><th>Page</th>
    </tr></thead>
    <tbody>
    <?php foreach ($rows as $r): ?>
      <tr>
        <td><?= h((string)$r['created_at']) ?></td>
        <td><?= h((string)$r['name']) ?></td>
        <td><?= h((string)$r['email']) ?></td>
        <td><?= h((string)($r['phone'] ?? '')) ?></td>
        <td><?= h((string)($r['service'] ?? '')) ?></td>
        <td class="msg"><?= h((string)$r['message']) ?></td>
        <td><?= h((string)($r['source_page'] ?? '')) ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
<?php endif; ?>
</div>
</body>
</html>
