<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yourmail@gmail.com'; // Gmail address
    $mail->Password   = 'Here-Paste-App-Password';      // App Password (not your Gmail password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('janidev1998@gmail.com', 'Jani Khokhar');
    $mail->addAddress('jani.khokhar6@gmail.com', 'Jani Ark');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Gmail via PHPMailer';
    $mail->Body    = '<h1>Hello AR!</h1><p>This is a test email sent using PHPMailer with Gmail SMTP.</p>';
    $mail->AltBody = 'Hello Ar! This is a test email sent using PHPMailer with Gmail SMTP.';

    $mail->send();
    echo 'Message has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
