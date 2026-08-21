<?php
/**
 * Template only - this file IS committed to git, safe because it has no real secrets.
 *
 * SETUP (do this once, directly on the server - never through git):
 * 1. Copy this file to: /home1/de2shrnx/db-config.php  (ONE LEVEL ABOVE public_html,
 *    NOT inside it - so it can never be served over the web even by mistake).
 * 2. Fill in your real database name / username / password below
 *    (cPanel -> MySQL Databases -> the database + user you already created).
 * 3. Set admin_password to a strong password of your choice - this protects
 *    the /leads-admin.php submissions viewer.
 * 4. Never commit that real file. It's already in .gitignore.
 */
return [
    'host'           => 'localhost',
    'dbname'         => 'REPLACE_WITH_YOUR_DB_NAME',
    'user'           => 'REPLACE_WITH_YOUR_DB_USER',
    'password'       => 'REPLACE_WITH_YOUR_DB_PASSWORD',
    'admin_password' => 'REPLACE_WITH_A_STRONG_PASSWORD',
];
