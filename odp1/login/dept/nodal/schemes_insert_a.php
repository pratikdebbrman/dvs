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
$sql = "INSERT INTO schemes_of_a(scheme_number,schemes_criteria,exp_date,certificates)VALUES ('$_POST[scheme_number]','$_POST[schemes_criteria]','$_POST[exp_date]','$_POST[certificates]')";




if ($conn_1->query($sql) == TRUE) {
    header("Location:dept_a_nodal.php"); 
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
