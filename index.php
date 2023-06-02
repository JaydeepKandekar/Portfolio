<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $to = 'jaydeepkandekar8@gmail.com';
    $subject = 'New Contact Form Submission';
    $message = "First Name: $firstname\n\nLast Name: $lastname\n\nCountry: $country\n\nSubject: $subject";

    // Send email
    if (mail($to, $subject, $message)) {
        echo 'Thank you for contacting us!';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}
?>
