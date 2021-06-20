<?php
session_start();
//connecting to database
$conn = mysqli_connect("localhost","root","","project_1");
//$query="SELECT * from register_nodal WHERE nodal_id='".$_POST['govid']."' and password='".$_POST["pass"]."'";
$query = "SELECT id FROM register_can WHERE name='$_POST[username]'"; 
//fetching query
// echo $query;
// die();
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
//print_r($row);
    //echo($row);
        if($row!='')
        {
                     
            $user = $_POST["userid"];
            $dir_path = "certificates/".$user."/";
            mkdir($dir_path, 0777,true);
            $filename = $_FILES["uploadfile"] ["name"];
            $filetemp = $_FILES["uploadfile"] ["tmp_name"];
            $folder = "certificates/".$user."/".$filename;
            echo "<center><img src='$folder' height='400' width = '400' /></center><br><br>";
            echo "<center><p>$filename  File Upload Successfully</p></center";
            move_uploaded_file($filetemp, $folder);
            
          header("Location:image.php");
        }
        else
        {
         echo "<center><p>$filename  File Not Upload </p></center";
        
        

    }
    $result->free();
?>

