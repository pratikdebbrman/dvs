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
$mail->Password = "Pratikdeb91@";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";                           
//Set TCP port to connect to 
$mail->Port = 465;                                   

$mail->From = "odpbyquibits@gmail.com";
$mail->FromName = "quibits";

error_reporting(0);

$mail->addAddress("pratikdeb91@gmail.com", "quibits");

$mail->isHTML(true);

$sub=$_POST[subject];
$body=$_POST[message];

$mail->Subject = $sub;
$mail->Body = "This is the plain text version of the email content";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;

} 
else 
{   
    echo "Message has been sent successfully";
    $_SESSION["status"] = "S";
    header("Location: index.php"); 
    exit();
}