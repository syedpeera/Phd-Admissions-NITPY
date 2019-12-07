<?php
include("connection.php");
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load Composer's autoloader
//require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'githubdaily1@gmail.com';                 // SMTP username
            $mail->Password = 'Aabc123@';                           // SMTP password
            $mail->SMTPSecure = 'tls';  //tls;                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port =  587 ;//465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('githubdaily1@gmail.com', 'NITPY PHD Admission');
            $mail->addAddress($_SESSION['applicant_email'], 'Applicant');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Acknowledgement NITPY PHD Admission';
            $mail->Body    = 'Your Application has been submitted and your Application Number is <b>'.$_SESSION['application_no'].'</b><br/><br/><b>Keep the Application Number with you for Downloading your Application.</b>';
            $mail->AltBody = 'Your Application has been submitted and your Application Number is <b>'.$_SESSION['application_no'].'</b><br/><br/><b>Keep the Application Number with you for Downloading your Application.</b>';

            $mail->send();
            echo '<b>Check your email</b>';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

?>
