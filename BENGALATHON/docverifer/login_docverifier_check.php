<?php
session_start();
//connecting to database
$conn = mysqli_connect("localhost","root","","project_1");
//$query="SELECT * from register_nodal WHERE nodal_id='".$_POST['govid']."' and password='".$_POST["pass"]."'";
$query = "SELECT id FROM register_docverifier WHERE doc_id='$_POST[docid]' and password='$_POST[pass]'"; 
//fetching query
// echo $query;
// die();
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
//print_r($row);
    //echo($row);
        if($row!='')
        {
          header("Location:copy.php");
        }
        else
        {
          //echo "in else";
          //die();
           $_SESSION['message']="Incorrect Username or Password."; 
        header("Location:login_docverifier.php");
        echo '<h3>Invalid username or password</h3>';
        
        

    }
    $result->free();
?>

