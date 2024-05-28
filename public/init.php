<?php
session_start();

require 'components/Components.php';
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Logger\Logger; // Memperbaiki pemanggilan kelas Logger

// Inisialisasi Dotenv dengan jalur yang tepat ke file .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$Components = new Components();

// Enable MySQLi error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Path to the log file
$logFilePath = __DIR__ . '/../app/logs/application.log';
$logger = new Logger($logFilePath); // Memperbaiki pemanggilan kelas Logger

try {
    $Database = mysqli_connect($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASS"], $_ENV["DB_NAME"]);
    if (!$Database) {
        throw new Exception("Failed to connect to the database.");
    }
} catch (Exception $e) {
    // Log the error
    $logger->log("Database connection error: " . $e->getMessage());

    // Output error to console
    echo '<script>console.error("Connection Database Trouble: ' . $e->getMessage() . '");</script>';

    // Display user-friendly error message
    echo '<div style="color: red; font-weight: bold;">Sorry, we are experiencing technical difficulties. Please try again later.</div>';
}
