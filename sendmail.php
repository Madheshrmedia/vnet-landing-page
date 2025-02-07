
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email1 = isset($_POST['email1']) ? $_POST['email1'] : '';
    $phone1 = isset($_POST['phone1']) ? $_POST['phone1'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
   
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'muthubalaaa@gmail.com';
    $mail->Password = 'ijnicomouvgzilqs';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('muthubalaaa@gmail.com', 'Vnet');
    $mail->addAddress('muthubala894@gmail.com'); 

    $mail->isHTML(true);
        $mail->Subject = 'Payment Form Submission';
        $mail->Body = "
            <h3>Payment Form Submission</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email1</p>
            <p><b>Phone:</b> $phone1</p>
            <p><b>Course:</b> $course</p>
        ";

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send email: " . $mail->ErrorInfo;
    }

    ?>