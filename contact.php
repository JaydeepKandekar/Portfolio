<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field_name = $_POST['cf_name'];
    $field_email = $_POST['cf_email'];
    $field_message = $_POST['cf_message'];

    $to = 'jaydeepkandekar8@gmail.com';
    $subject = 'Your Subject: ' . $field_name;

    $body_message = 'From: ' . $field_name . "\n";
    $body_message .= 'E-mail: ' . $field_email . "\n";
    $body_message .= 'Message: ' . $field_message;

    $headers = 'From: ' . $field_email . "\r\n";
    $headers .= 'Reply-To: ' . $field_email . "\r\n";

    // Send email
    if (mail($to, $subject, $body_message, $headers)) {
        echo '<script language="javascript" type="text/javascript">
                alert("Success Message");
                window.location = "contact.html";
              </script>';
    } else {
        echo '<script language="javascript" type="text/javascript">
                alert("Error Message");
                window.location = "contact.html";
              </script>';
    }
}
?>
