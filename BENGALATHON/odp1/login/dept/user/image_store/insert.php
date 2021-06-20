<?php

//insert.php

include('dbconfig.php');

if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
  $conn = mysqli_connect("localhost","root","","project_1");
//$query="SELECT * from register_nodal WHERE nodal_id='".$_POST['govid']."' and password='".$_POST["pass"]."'";
$query = "SELECT id FROM register_can WHERE name='$_POST[userid]'"; 
//fetching query
// echo $query;
// die();
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
//print_r($row);
 
  if($row!='')
  {
	  $query = "INSERT INTO tbl_images(userid,images) VALUES ('$store','$image_file')";
	  $statement = $connect->prepare($query);
	  $statement->execute();


// 	  <!-- <form action="" method="post" enctype="multipart/form-data">
// 		<input class="form-control bg-light border-0 small" type="text" name="profilename" placeholder="Enter your Profile Name"><br><br>
// 		<input class="form-control bg-light border-0 small" type="file" name="uploadfile" value="" /><br><br>
// 		<input class="form-control bg-light border-0 small" type="submit" name="submit" value="Click here for Upload your File" /><br><br>
// 	</form>
// </center>
// </body>
// <style>
//   .cor{
//     color: red;
//   }
// </style>
// </html> -->

$user = $_POST['userid'];
$dir_path = "certificates_user/".$user."/";
mkdir($dir_path, 0777,true);
$filename = $_FILES["uploadfile"] ["name"];
$filetemp = $_FILES["uploadfile"] ["tmp_name"];
$folder = "certificates_user/".$user."/".$filename;
echo "<center><img src='$folder' height='100' width = '100' /></center><br><br>";

?>

	}
 }
}


?>
