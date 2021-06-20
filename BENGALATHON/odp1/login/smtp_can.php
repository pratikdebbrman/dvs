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

//echo $_POST['mail'];
// $sql = "INSERT INTO register_nodal(name,nodal_id,password,email)VALUES ($_POST[fname],$_POST[govid],$_POST[pass],$_POST[mail])";
$sql = "INSERT INTO register_can(name,password,email)VALUES ('".$_POST["fname"]."','".$_POST["pass"]."','".$_POST["mail"]."')";


$conn_1->query($sql);

header("Location:dept/tables_can.php");
$conn_1->close();




?>
