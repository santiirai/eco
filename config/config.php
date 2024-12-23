<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'waste_management');
define('DB_PORT', 3307);

// Application Configuration
define('BASE_URL', '/eco');  // Update this according to your setup

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Time Zone
date_default_timezone_set('Asia/Kathmandu');  // Update this according to your timezone
?> 