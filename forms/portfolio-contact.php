<?php
// ---------------------------------------------------------------------------
// Portfolio Contact API
// Accepts a POST request with JSON body from your portfolio site and
// forwards the submission to your personal email.
//
// CORS: update ALLOWED_ORIGIN below to your portfolio domain in production.
// ---------------------------------------------------------------------------

header('Content-Type: application/json');

// Allow your portfolio origin. Use '*' only during local development.
$allowedOrigin = getenv('PORTFOLIO_ORIGIN') ?: '*';
header('Access-Control-Allow-Origin: ' . $allowedOrigin);
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    exit;
}

// Accept both JSON body and form-encoded data
$contentType = $_SERVER['CONTENT_TYPE'] ?? '';
if (str_contains($contentType, 'application/json')) {
    $raw  = file_get_contents('php://input');
    $data = json_decode($raw, true) ?? [];
} else {
    $data = $_POST;
}

$name    = trim(strip_tags($data['name']    ?? ''));
$email   = trim(strip_tags($data['email']   ?? ''));
$phone   = trim(strip_tags($data['phone']   ?? ''));
$subject = trim(strip_tags($data['subject'] ?? ''));
$message = trim(strip_tags($data['message'] ?? ''));

if (!$name || !$email || !$message) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'name, email, and message are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    exit;
}

require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$cfg = require __DIR__ . '/mail_config.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $cfg['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['username'];
    $mail->Password   = $cfg['password'];
    $mail->SMTPSecure = $cfg['encryption'];
    $mail->Port       = $cfg['port'];

    $mail->setFrom($cfg['from_email'], $cfg['from_name']);
    $mail->addAddress('welkin.ithub@gmail.com', 'welkin portfolio contact');
    $mail->addReplyTo($email, $name);

    $mail->Subject = $subject ?: 'Portfolio Contact from ' . $name;

    $body  = "Name:    $name\n";
    $body .= "Email:   $email\n";
    if ($phone)   $body .= "Phone:   $phone\n";
    if ($subject) $body .= "Subject: $subject\n";
    $body .= "\nMessage:\n$message\n";

    $mail->Body = $body;
    $mail->send();

    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent!']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Failed to send. Please try again later.']);
}
