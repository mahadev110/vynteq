<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Receiver email address
    $to = "your-email@example.com"; // replace with your actual email

    // Email subject
    $email_subject = "New Contact Form Message: " . $subject;

    // Email body
    $email_body = "You have received a new message from the contact form:\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Subject: $subject\n" .
                  "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Try to send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
