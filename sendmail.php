<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST["recipient"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    $headers = "From: $name <$email>";

    if (mail($recipient, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>