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
$sql = "INSERT INTO applied_hfw_user(aadhar_number,first_name,last_name,ph_number,email_id,address,bank_name,branch,acct_hold_name,acct_number)VALUES ('$_POST[aadhar_number]','$_POST[fname]','$_POST[lname]','$_POST[ph_number]','$_POST[email_id]','$_POST[address]','$_POST[bank_name]','$_POST[branch_name]','$_POST[acct_hold_name]','$_POST[acct_number]')";




if ($conn_1->query($sql) == TRUE) {
    header("Location:show/show_form_for_hfw.php"); 
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
