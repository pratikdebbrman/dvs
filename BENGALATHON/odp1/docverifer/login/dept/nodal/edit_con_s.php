<?php
$status = "";
//if(isset($_POST['criteria'] && $_POST['exp_date'] && $_POST['max_persons'] && $_POST['certificates']))
//{
$id=$_REQUEST['id'];
//$trn_date = date("Y-m-d H:i:s");
$scheme_number =$_REQUEST['scheme_number'];
$criteria =$_REQUEST['criteria'];
$exp_date =$_REQUEST['exp_date'];
$max_persons =$_REQUEST['max_persons'];
$certificates =$_REQUEST['certificates'];
//echo $criteria;
//echo $exp_date;
//$submittedby = $_SESSION["username"];
//$conn = mysqli_connect("localhost","root","","project_1");
$update="UPDATE schemes_of_school SET scheme_number ='$scheme_number', criteria = '$criteria', exp_date = '$exp_date' ,max_persons = '$max_persons' ,certificates = '$certificates' WHERE id = $id";

/*$update="update new_record set trn_date='".$trn_date."',
name='".$name."', age='".$age."',
submittedby='".$submittedby."' where id='".$id."'";*/


$myConnection = mysqli_connect("localhost","root","","project_1") or die ("could not connect to mysql"); 
mysqli_query($myConnection, $update) or die(mysqli_error());

//$status = "Record Updated Successfully. </br></br><a href='Department_of_School_schemes.php'>View Updated Record</a>";

//echo '<p style="color:#FF0000;">'.$status.'</p>';
//}
header("Location:dept_s_nodal.php");
?>