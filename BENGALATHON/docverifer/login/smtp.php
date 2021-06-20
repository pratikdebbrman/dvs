<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailere/autoload.php";

$mail = new PHPMailer();

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "odpbyquibits@gmail.com";                 
$mail->Password = "24339563";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";                           
//Set TCP port to connect to 
$mail->Port = 465;                                   

$mail->From = "odpbyquibits@gmail.com";
$mail->FromName = "quibits";

error_reporting(0);



$mail->addAddress($_POST['mail'], "quibits");

$mail->isHTML(true);


$mail->Subject = "Registration in opd";
$mail->Body = "Successfully registered in opd";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;

} 
else 
{   
    echo "Message has been sent successfully";
    $_SESSION["status"] = "S";
    header("Location: login.html"); 
    exit();
}