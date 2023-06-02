<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    // Email address to receive the form submissions
    $to = 'jaydeepkandekar8@gmail.com';

    // Subject of the email
    $email_subject = 'New Contact Form Submission';

    // Email content
    $email_message = "First Name: $firstname\n\nLast Name: $lastname\n\nCountry: $country\n\nSubject: $subject";

    // Headers
    $headers = "From: $firstname $lastname <$to>" . "\r\n" .
        "Reply-To: $to" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $email_subject, $email_message, $headers)) {
        echo 'Thank you for contacting us!';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}
?>
