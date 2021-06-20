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
$sql = "INSERT INTO gov_id_table(org_gov_id)VALUES ('$_POST[gov_id]')";




if ($conn_1->query($sql) == TRUE) {
header("location:javascript://history.go(-3)");
    
    } else {
    echo "Error: " . $sql . "<br>" . $conn_1->error;
}


$conn_1->close();
?>
