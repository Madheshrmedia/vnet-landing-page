
   




<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Check if form data is received
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email1 = isset($_POST['email1']) ? $_POST['email1'] : '';
    $phone1 = isset($_POST['phone1']) ? $_POST['phone1'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';

    // Check if a file is uploaded
    if (isset($_FILES['doc']) && $_FILES['doc']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['doc']['tmp_name'];
        $fileName = $_FILES['doc']['name'];
        $fileSize = $_FILES['doc']['size'];
        $fileType = $_FILES['doc']['type'];
        
        // Specify the allowed file types
        $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        
        // Check if file type is allowed
        if (in_array($fileType, $allowedTypes)) {
            $uploadDir = 'uploads/'; // Directory where the file will be saved
            $filePath = $uploadDir . $fileName;

            // Move the uploaded file to the upload directory
            if (move_uploaded_file($fileTmpPath, $filePath)) {
                echo "File uploaded successfully!";
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type. Only PDF and DOC files are allowed.";
            exit();
        }
    } else {
        echo "No file uploaded.";
        exit();
    }

    // Setting up the email parameters
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'muthubalaaa@gmail.com';
    $mail->Password = 'ijnicomouvgzilqs';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('muthubalaaa@gmail.com', 'Vnet');
    $mail->addAddress('muthubala894@gmail.com'); 

    // Add the uploaded file as an attachment
    $mail->addAttachment($filePath); // Attach the file from the server

    $mail->isHTML(true);
    $mail->Subject = 'Payment Form Submission';
    $mail->Body = "
        <h3>Payment Form Submission</h3>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email1</p>
        <p><b>Phone:</b> $phone1</p>
        <p><b>Course:</b> $course</p>
    ";

    // Send the email
    $mail->send();
    echo "success"; // Ensure AJAX recognizes this as success

} catch (Exception $e) {
    echo "error: " . $mail->ErrorInfo;
}
?>
