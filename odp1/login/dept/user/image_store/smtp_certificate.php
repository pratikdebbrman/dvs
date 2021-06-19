<?php
$servername = "localhost";
$user='root';
$pass='';
$dbname = "project_1";

// Create connection
$conn_1 = new mysqli($servername,$user,$pass,$dbname);
// Check connection
if ($conn_1->connect_error) {
    die("Connection failed: " . $conn_1->connect_error);
}


// $sql = "INSERT INTO register_nodal(name,nodal_id,password,email)VALUES ($_POST[fname],$_POST[govid],$_POST[pass],$_POST[mail])";
$sql = "SELECT * from register_can where name='$_POST[userid]'";




if ($conn_1->query($sql) == TRUE) {
    header("");
    } else {
    echo "Error: " . $sql . "<br>" . $conn_1->error;
}


$conn_1->close();


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



$mail->addAddress("pratikdeb91@gmail.com", "quibits");

$mail->isHTML(true);



$mail->Subject = "Registration in opd";
$mail->Body = "Hii ".$_POST["fname"]." Successfully registered in opd & "." Your Password is ".$_POST["pass"];
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;

} 
else 
{   
    echo "Message has been sent successfully";
    $_SESSION["status"] = "S";
    header("Location:certificate_upload_user.php");
    exit();
}


?>
