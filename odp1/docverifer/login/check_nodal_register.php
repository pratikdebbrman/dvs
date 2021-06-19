<?php
$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`



  //echo($_POST['name']);
 //If not, process the form, and return true on success
    $servername = "localhost";
  $user='root';
  $pass='';
  $dbname = "project_1";

  // Create connection
  $conn_1 = new mysqli($servername,$user,$pass,$dbname);
  // Check connection
  if ($conn_1->connect_error) {
      die("Connection failed: " . $conn_1->connect_error);
  }
  $sql = "SELECT id_nodal FROM gov_id_table WHERE org_gov_id='$_POST[name]'"; 
  $query = mysqli_query($conn_1, $sql);
  $row = mysqli_fetch_row($query);
  if($row!=''){
    $form_data['success'] = true;
    $form_data['posted'] = 'Govt id found';
  }
  else
  {
    $form_data['error'] = false;
    $form_data['posted'] = 'Govt id not found';
  }
    


//Return the data back to form.php
echo json_encode($form_data);
?>