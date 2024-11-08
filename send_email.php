<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Message from " . $name;
    $headers = "From: " . $email . "\r\n" . // Set sender's email as 'From' address
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=utf-8";

    // Compose the email content
    $body = "You have received a new message from " . $name . " (" . $email . ").\n\n";
    $body .= "Message:\n" . $message;

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
