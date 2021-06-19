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
$sql = "INSERT INTO register_docverifier(name,doc_id,email,password)VALUES ('$_POST[doc_name]','$_POST[doc_id]','$_POST[email]','$_POST[pass]')";

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