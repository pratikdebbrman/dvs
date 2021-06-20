<?php
session_start();
//connecting to database
$conn = mysqli_connect("localhost","root","","project_1");
//$query="SELECT * from register_nodal WHERE nodal_id='".$_POST['govid']."' and password='".$_POST["pass"]."'";
$query = "SELECT id FROM register_can WHERE name='$_POST[u_name]' and password='$_POST[pass]'"; 
//fetching query
// echo $query;
// die();
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
//print_r($row);
    //echo($row);
        if($row!='')
        {
          header("Location:dept/tables_can.php");
        }
        else
        {
          //echo "in else";
          //die();
           $_SESSION['message']="Incorrect Username or Password."; 
        header("Location:login_can.php");
        echo '<h3>Invalid username or password</h3>';
        
        

    }
    $result->free();
?>

