<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Check if the file was uploaded successfully
    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        die("Error: File upload failed with error code " . $_FILES['file']['error']);
    }

    // Validate form inputs
    if (empty($_POST['name']) || empty($_POST['email1']) || empty($_POST['phone1'])|| empty($_POST['course'])) {
        die("Error: All fields are required.");
    }

    // Get form data
    $filenameee = $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name']; 
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone1']);
    $course = htmlspecialchars($_POST['course']);
    $email = filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL);
   

    if (!$email) {
        die("Error: Invalid email format.");
    }

    // Email content
    $message = "Name: $name\r\nEmail: $email\r\nPhone: $phone\r\nCourse: $course\r\n";

    $subject = "Payment form submission";
    $fromname = "Vnet";
    $fromemail = "noreply@iyersrecipe.in";  // Replace with your domain email
    $mailto = "muthubala894@gmail.com";  // Replace with recipient email

    // Read file content
    $content = file_get_contents($fileName);
    if (!$content) {
        die("Error: Failed to read the uploaded file.");
    }
    $content = chunk_split(base64_encode($content));

    // Create email boundary
    $separator = md5(time());
    $eol = "\r\n";

    // Email headers
    $headers = "From: $fromname <$fromemail>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // Message body
    $body = "--$separator" . $eol;
    $body .= "Content-Type: text/plain; charset=\"UTF-8\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // Attachment
    $body .= "--$separator" . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"$filenameee\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment; filename=\"$filenameee\"" . $eol;
    $body .= $content . $eol;
    $body .= "--$separator--";

    // Send email
    if (mail($mailto, $subject, $body, $headers)) {
        echo "Mail sent successfully!";
    } else {
        echo "Mail sending failed!";
        print_r(error_get_last());
    }
}
?>
