<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
    exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['contact'] ?? ''));
$inquiry = trim(strip_tags($_POST['inquiry'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

if (!$name || !$email || !$message) {
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter a valid email address.']);
    exit;
}

require_once __DIR__ . '/../vendor/autoload.php';
$cfg = require __DIR__ . '/mail_config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
    $mail->addAddress($cfg['to_email']);
    $mail->addReplyTo($email, $name);

    $mail->Subject = 'New Contact Form Submission from ' . $name;

    $body  = "Name:    $name\n";
    $body .= "Email:   $email\n";
    if ($phone)   $body .= "Phone:   $phone\n";
    if ($inquiry) $body .= "Inquiry: $inquiry\n";
    $body .= "\nMessage:\n$message\n";

    $mail->Body = $body;

    $mail->send();
    echo json_encode(['status' => 'success', 'message' => "Your message has been sent! We'll get back to you shortly."]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Failed to send. Please email us directly at info@welkinhub.in']);
}
