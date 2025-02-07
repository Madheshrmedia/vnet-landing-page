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


<div class="payment">
                        <form  id="survey-forms">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label id="name-label" for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            style="border-radius: 5px">
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label id="email-label" for="email1">Your Email ID</label>
                                        <input type="email1" name="email1" id="email1" placeholder="Your Email"
                                            class="form-control" style="border-radius: 5px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="phone-label" for="phone1">Your Phone</label>
                                        <input type="number" name="phone1" id="phone1" placeholder="Your Phone"
                                            class="form-control" style="border-radius: 5px">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="course-label" for="course">Course</label>
                                        <input type="text" name="course" id="course" class="form-control"
                                            style="border-radius: 5px">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="file-label" for="doc">Upload Payment Proof (Screenshot)</label>
                                        <input type="file" name="doc" id="doc" class="form-control"
                                            style="border-radius: 5px">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 address">
                                    <button type="submit" id="submits" class="btn btn-primary btn-block">Send</button>
                                </div>
                            </div>
                            <p id="success-message1" style="display:none;color:green;">Email Sent Successfully!</p>
                            <p id="error-message1" style="display:none;color:red;">Failed to send email.</p>
                        </form>
                    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#survey-forms").submit(function(e){
        e.preventDefault(); // Prevent form from reloading the page
        console.log("Form Data:", $(this).serialize());
        $.ajax({
            type: "POST",
            url: "sendmail.php", // The PHP file to handle the email sending
            data: $(this).serialize(),
            success: function(response) {
                if(response.includes("success")){
                    $("#success-message1").show();
                    $("#error-message1").hide();
                    $("#survey-forms")[0].reset();
                } else {
                    $("#error-message1").show();
                    $("#success-message1").hide();
                }
            }
        });
    });
});
</script>