<?php
php -S localhost:8000

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /**
    * Requires the "PHP Email Form" library
    * The "PHP Email Form" library is available only in the pro version of the template
    * The library should be uploaded to: vendor/php-email-form/php-email-form.php
    * For more info and help: https://bootstrapmade.com/php-email-form/
    */

    // Replace contact@example.com with your real receiving email address
    $receiving_email_address = 'ashlynnsjones@yahoo.com';

    if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
      include( $php_email_form );
    } else {
      die( 'Unable to load the "PHP Email Form" Library!');
    }

    $contact = new PHP_Email_Form;
    $contact->ajax = true;

    // Assign form data to email form fields
    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['name'];
    $contact->from_email = $_POST['email'];
    $contact->subject = $_POST['subject'];

    // Adding messages from form input
    $contact->add_message( $_POST['name'], 'From');
    $contact->add_message( $_POST['email'], 'Email');
    $contact->add_message( $_POST['message'], 'Message', 10);

    // Send the message and display success or error message
    if($contact->send()) {
      echo 'Message sent successfully!';
    } else {
      echo 'Failed to send message. Please try again.';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
</head>
<body>

  <form action="" method="POST" id="contact-form">
    <div>
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>
    </div>
    <div>
      <label for="message">Your Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>
    </div>
    <div>
      <button type="submit">Send Message</button>
    </div>
  </form>

</body>
</html>

