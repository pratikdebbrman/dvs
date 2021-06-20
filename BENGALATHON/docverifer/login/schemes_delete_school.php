<?php

$servername = "localhost";
$user='root';
$pass='';
$dbname = "project_1";

// Create connection
$conn = new mysqli($servername,$user,$pass,$dbname);
if($conn === false){ 
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 

$sql = "DELETE FROM schemes_of_school WHERE ID='$_POST[msg_delete]'"; 
if(mysqli_query($conn, $sql)){ 
	header('Location: dsc.php');
    }
else{ 
	echo "ERROR: Could not able to execute $sql. " 
								. mysqli_error($conn); 
} 
mysqli_close($conn); 
?> 
