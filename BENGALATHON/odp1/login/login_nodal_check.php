<?php
   ob_start();
   session_start();
?>
<?php

//connecting to database
$conn = mysqli_connect("localhost","root","","project_1");
//$query="SELECT * from register_nodal WHERE nodal_id='".$_POST['govid']."' and password='".$_POST["pass"]."'";
$query = "SELECT id FROM register_nodal WHERE nodal_id='$_POST[govid]' and password='$_POST[pass]'"; 
//fetching query
// echo $query;
// die();
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
//print_r($row);
    //echo($row);
        if($row!='')
        {
          if (!empty($_POST[govid]) 
               && !empty($_POST[pass])) 
        {
        
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = $_POST[govid];
                  $_SESSION['password'] = $_POST[pass];
                  
          header("Location:dept/nodal/tables_nodal.php");
        }
        }
        else
        {
          //echo "in else";
          //die();
           $_SESSION['message']="Incorrect Username or Password."; 
        header("Location:login_nodal.php");
        echo '<h3>Invalid username or password</h3>';
        
        

    }
    $result->free();
?>

