<?php
$conn = mysqli_connect("localhost","root","","project_1");
$id=$_REQUEST['id'];
$query = "DELETE FROM register_nodal WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location:admin_page_1.php"); 
?>