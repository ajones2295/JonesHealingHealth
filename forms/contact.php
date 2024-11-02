<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recipient email address
    $to = 'ashlynnsjones@yahoo.com';

    // Sender details from form inputs
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construct the email headers
    $headers = "From: " . $from_name . " <" . $from_email . ">\r\n";
    $headers .= "Reply-To: " . $from_email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>

<form action="" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Your Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
</form>

</body>
</html>
