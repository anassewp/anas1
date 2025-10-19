<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    exit;
}

require_once __DIR__ . '/config.php';

$name_input = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$name = ($name_input === null || $name_input === false) ? '' : trim($name_input);

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

$company_input = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_SPECIAL_CHARS);
if ($company_input === null || $company_input === false) {
    $company = null;
} else {
    $company = trim($company_input);
    if ($company === '') {
        $company = null;
    }
}

$message_input = filter_input(INPUT_POST, 'message', FILTER_UNSAFE_RAW);
$message = ($message_input === null || $message_input === false) ? '' : trim($message_input);

if (!$name || !$email || !$message) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'Please provide a valid name, email, and message.']);
    exit;
}

if (mb_strlen($message) > 2000) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'Message is too long. Please keep it under 2000 characters.']);
    exit;
}

$connection = get_database_connection();

if (!$connection) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Unable to connect to the database. Please try again later.']);
    exit;
}

$statement = $connection->prepare('INSERT INTO messages (name, email, company, message) VALUES (?, ?, ?, ?)');

if (!$statement) {
    error_log('Prepare failed: ' . $connection->error);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'An unexpected error occurred.']);
    exit;
}

$statement->bind_param('ssss', $name, $email, $company, $message);

if (!$statement->execute()) {
    error_log('Execute failed: ' . $statement->error);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Unable to submit your message at this time.']);
    $statement->close();
    $connection->close();
    exit;
}

$statement->close();
$connection->close();

echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been received.']);
