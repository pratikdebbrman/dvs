<?php
$conn = mysqli_connect("localhost","root","","project_1");
$id=$_REQUEST['id'];
$query = "DELETE FROM schemes_of_hfw WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

    header("Location:dept_hfw_nodal.php"); 
?>