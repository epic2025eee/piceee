<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Start the session
    if ($name) {
        $_SESSION["username"] = $name;
    }

    // Check for required fields
    if ($name && $email && $message) {
        $to_email = 'piceee2021@gmail.com';
        $email_subject = "Path Identifier Command Contact Form";
        $email_message = "Name: $name\r\n";
        $email_message .= "Phone: $phone\r\n";
        $email_message .= "Email: $email\r\n";
        $email_message .= "Company: $company\r\n";
        $email_message .= "Subject: $subject\r\n";
        $email_message .= "Message: $message\r\n";

        $headers = "From: support@gs2pic.co.in\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send email
        if (mail($to_email, $email_subject, $email_message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Please fill in all required fields (Name, Email, Message).";
    }
} else {
    echo "Invalid request method.";
}
?>
