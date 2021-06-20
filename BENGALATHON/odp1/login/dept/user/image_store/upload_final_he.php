<?php
$conn = mysqli_connect("localhost","root","","project_1");
//$query="SELECT * from register_nodal WHERE nodal_id='".$_POST['govid']."' and password='".$_POST["pass"]."'";
$query = "SELECT id FROM register_can WHERE name='$_POST[userid_2]'";
//fetching query
//  echo $query;
// die();
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
//print_r($row);

$user = $_POST["userid_2"];
if($row!='')
        {
                       
                       


                      $dir_path = "certificates_user/".$user."/";

                       if (!file_exists($dir_path)) {
                          mkdir($dir_path, 0777, true);
                        }
                      $uniquesavename=time().uniqid(rand());
                        $destFile = $dir_path . $uniquesavename . '.jpg';
                        $uniquesavename1=$uniquesavename . '.jpg';
                        $filename = $_FILES["uploadfile"]["tmp_name"];
                        list($width, $height) = getimagesize( $filename );      
                        move_uploaded_file($filename,  $destFile);
                       $folder = "$destFile";
                      echo "<center><img src='$folder' height='400' width = '400' /></center><br><br>";
                      echo "<center><p>$user Your File Upload Successfully And check your mail for futher notifications</p></center";
                      //move_uploaded_file($filetemp, $folder);
                      $query_1 = "INSERT INTO tbl_images(userid,image_name)VALUES ('$user','$uniquesavename1')";//insert into db file name
                      $conn->query($query_1);
                       header("Location:certificate_upload_user_he.php");
                       //insert into db file name
                       $query_2="UPDATE register_can SET status ='N' WHERE name='$_POST[userid_2]'";
                      $conn->query($query_2);
                   
            }
     
      else
      {
        echo "<center><p> File Not Upload</p></center";
         header("Location:certificate_upload_user_he.php");
      }
      ?>
