<?php
$database = [
    // Update these values when deploying under XAMPP (default credentials shown)
    'host' => getenv('DB_HOST') ?: '127.0.0.1',
    'port' => (int) (getenv('DB_PORT') ?: 3306),
    'socket' => getenv('DB_SOCKET') ?: null,
    'name' => getenv('DB_NAME') ?: 'anas_portfolio',
    'user' => getenv('DB_USER') ?: 'root',
    'pass' => getenv('DB_PASS') ?: '',
    'charset' => 'utf8mb4',
];

function get_database_connection(): ?mysqli
{
    global $database;

    $connection = @new mysqli(
        $database['host'],
        $database['user'],
        $database['pass'],
        $database['name'],
        $database['port'],
        $database['socket'] ?: null
    );

    if ($connection->connect_errno) {
        error_log('Database connection failed: ' . $connection->connect_error);
        return null;
    }

    if (!$connection->set_charset($database['charset'])) {
        error_log('Error loading character set ' . $database['charset'] . ': ' . $connection->error);
    }

    return $connection;
}
