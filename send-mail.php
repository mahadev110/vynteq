<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sales@vynteqglobal.com';         // your Gmail address
        $mail->Password   = 'yojd qhej locs mktf';         // the 16-character app password
        $mail->SMTPSecure = 'tls';                            // use 'ssl' for port 465
        $mail->Port       = 587;

        // Email Content
        $mail->setFrom('sales@vynteqglobal.com', 'Contact Form');
        $mail->addAddress('sales@vynteqglobal.com');          // send to yourself or any email
        $mail->addReplyTo($email, $name);

        $mail->Subject = "New Contact Form Message: " . $subject;
        $mail->Body    = "You have received a new message from the contact form:\n\n" .
                         "Name: $name\n" .
                         "Email: $email\n" .
                         "Subject: $subject\n" .
                         "Message:\n$message";

        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "error: {$mail->ErrorInfo}";
    }
}
?>
