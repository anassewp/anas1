<?php
$database = [
    'host' => getenv('DB_HOST') ?: 'localhost',
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
        $database['name']
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
