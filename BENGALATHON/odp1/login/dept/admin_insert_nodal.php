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
$sql = "INSERT INTO register_nodal(name,nodal_id,password,email)VALUES ('$_POST[nodal_name]','$_POST[nodal_id]','$_POST[pass]','$_POST[email]')";

echo $sql;

if ($conn_1->query($sql) == TRUE) {
    header("Location:admin_page_1.php"); 
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
S