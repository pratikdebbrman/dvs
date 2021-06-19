<?php
$conn = mysqli_connect("localhost","root","","project_1");
$id=$_REQUEST['id'];
$query = "DELETE FROM gov_id_table WHERE id_nodal=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location:admin_page_1.php"); 
?>