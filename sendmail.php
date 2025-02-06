<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];

    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Course Inquiry";

    $message = "
    <html>
    <head><title>New Inquiry</title></head>
    <body>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Interested Course:</strong> $comment</p>
    </body>
    </html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
    $headers .= "From: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid Request";
}
?>