<?php

//connecting to database
$conn = mysqli_connect("localhost","root","","project_1");
$query="SELECT * from nodal_table";
//fetching query
$result = mysqli_query($conn,$query);



    while ($row = $result->fetch_assoc()) {
        $field1name = $row["org_gov_id"];
        $field2name = $row["pass"];
  if(isset($_POST['user_id'])&& isset($_POST['password']))
       { 
       	$var_1 = $_POST['user_id'];
       	$var_2 = $_POST['password'];
       }
        if(isset($var_1))
        {
        	if( $var_1 == $field1name)
        	{
        		header('Location:dsc.php');
        	}
        	else
        		echo "false";
        }
        if(isset($var_2))
        {
          if( $var_2 == $field2name)
          {
            header('Location:smtp.php');
          }
          else
            echo "false";
        }
        
    
}
    $result->free();
?>