<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "shadhaclt@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "Error: Unable to send email.";
    }
} else {
    // If not a POST request, redirect to the form page
    header("Location: index.html"); // Replace with the actual URL of your form page
    exit();
}
?>
