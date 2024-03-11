<?php
include 'email_form.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sender's Email
    $sender_email = $email;

    // Receiver's Email
    $receiver_email = 'chanduraaparthi@gmail.com'; // replace with your email address

    // Email subject
    $subject = 'New message from your website';

    // Email message
    $message = "Name: " . $name . "\r\n" .
               "Email: " . $email . "\r\n" .
               "Message: " . $message;

    // Headers
    $headers = "From: " . $sender_email . "\r\n" .
               "Reply-To: " . $sender_email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Sending email
    if (mail($receiver_email, $subject, $message, $headers)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}
?>