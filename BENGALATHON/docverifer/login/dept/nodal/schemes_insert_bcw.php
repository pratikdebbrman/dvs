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
$sql = "INSERT INTO schemes_of_bcw(scheme_number,criteria,exp_date,max_persons,certificates)VALUES ('$_POST[scheme_number]','$_POST[msg_update]','$_POST[exp_date]','$_POST[max_persons]','$_POST[certificates]')";



if ($conn_1->query($sql) == TRUE) {
    header("Location:dept_bcw_nodal.php"); 
    } else {
    echo "Error: " . $sql . "<br>" . $conn_1->error;
}

/*
if($_POST[login] == $row["login_id_nodal"] && $_POST[psw] == $row["password_nodal"])
{
header('Location: gov.php');
}
else
{
echo "wrong password";
}*/
$conn_1->close();
?>
