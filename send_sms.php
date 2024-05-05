<?php
function sendSMS($phoneNumber, $message) {
    // Replace these variables with your email configuration
    $to = $phoneNumber . 'fe80::d6b9:2fff:fe95:426e%8'; // Replace gateway.address with your carrier's gateway address
    $subject = ''; // Subject is not necessary for SMS
    $headers = "From: maxkevm690@gmail.com"; // Replace with your email address

    // Send email
    mail($to, $subject, $message, $headers);
}

// Example usage
$phoneNumber = '4389273031'; // Replace with recipient's phone number
$message = 'Hello! Your timer has reached 0.';
sendSMS($phoneNumber, $message);
?>
