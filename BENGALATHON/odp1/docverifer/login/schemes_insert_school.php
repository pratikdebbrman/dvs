<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
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
$sql = "INSERT INTO schemes_of_school(criteria,exp_date,max_persons,certificates)VALUES ('$_POST[msg_update]','$_POST[exp_date]','$_POST[max_persons]','$_POST[certificates]')";



if ($conn_1->query($sql) == TRUE) {
    header('Location: dsc.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn_1->error;
}
echo $row["criteria"];
mysqli_free_result($result);
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
