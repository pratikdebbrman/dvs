<?php
error_reporting(0);
?>
<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <title>ODC</title>
   <link href="img/favicon1.png" rel="shortcut icon" type="image/png">
   <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand-->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class='fas fa-address-book' style='font-size:24px'></i>
        </div>
        <div class="sidebar-brand-text mx-3">ODC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="javascript:history.go(-3)" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout_gov.php" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>
        <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <a><button class="rounded-circle border-0" id="sidebarToggle" onClick="javascript:history.go(-1)"></button></a>


      </div> -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          
            <h1 style="font-size:200%; solid DodgerBlue;text-transform: uppercase">Verify the Certificates Of the Users</h1>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
             
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              
            </li>

            

          </ul>

        </nav>

  <center>

  <form action="" method="post" enctype="multipart/form-data">

    <input class="form-control form-control-user border-0 small required" type="text" name="userid" placeholder="Enter user id"><br><br>
    
                     
    
    <input class="btn btn-primary" type="submit" name="search" value="Search" /><br><br>

    <a href='user_details.php'>User Details<br><br></a>

<input class="form-control form-control-user border-0 small required" type="text" name="userid_meet" placeholder="Enter user id to schedule meeting"><br><br>

<input class="form-control form-control-user border-0 small required" type="text" name="meetlink" placeholder="Enter meet link with date and time"><br><br>

<input class="form-control form-control-user border-0 small required" type="text" name="message" placeholder="Enter message for user"><br><br>

<input class="btn btn-primary" type="submit" name="link_send_button" value="Send Meeting Details" /><br><br>
    
    
  </form>
  
</center>
</body>
<style>
  .cor{
    color: red;
  }
  input.largerCheckbox{
    width: 15px;
    height: 15px;
  }
</style>
</html>
<center>
<?php

$conn = mysqli_connect("localhost","root","","project_1");
$store=$_POST["userid"];
// echo $store;
// die();
$query_1="SELECT * FROM tbl_images WHERE userid='$store'";

// echo $query;
// die();
$result_1 = mysqli_query($conn,$query_1);
$result = mysqli_query($conn,$query_1);
$row_1 = mysqli_fetch_assoc($result_1);

echo "USER ID&nbsp";?><br><?php

echo $row_1['userid'];


?><br><?php 
// echo "CERTIFICATES<br>";

?>

<?php
while($row = mysqli_fetch_assoc($result)) {

 ?>
  <tr>
    
 <!-- <td align="center"><a href="/BENGALATHON/odp1/login/dept/user/image_store/certificates_user/<?php //echo $row_1['userid']?>/<?php //echo $row['image_name']; ?>" download><?php //echo $row['image_name']; ?></a>&nbsp&nbsp&nbsp&nbsp<br> -->
    
  </td>
    </tr>

                                
<?php }     
               $query_st = "SELECT * FROM register_can WHERE name='$_POST[userid]'"; 
                      
               $result_st = mysqli_query($conn,$query_st);
               $row_st = mysqli_fetch_row($result_st);
                   
                    // die();
               ?></center>
               <center><form action="" method="post">
                <?php
                      if($row_st['4']=='N')
                      { ?>
                            
                                  <center>
                                    <a href="https://drive.google.com/drive/folders/16lgln9gdZ7nKOK2GRvl76EiDbZhRHvnw?usp=sharing" target="popup" onclick="window.open('https://drive.google.com/drive/folders/16lgln9gdZ7nKOK2GRvl76EiDbZhRHvnw?usp=sharing' , 'name', 'width=900 height= 600 ' )">VIEW CERTIFICATES</a><br><br>
                                    
                                    <h4>User Certificate is not Verified</h4>
                                  <input type="checkbox" name="ver" class="largerCheckbox"value="V"><h1 style="font-size:100%; ">Verified</h1>
                                  <input type="hidden" name="name1" value="<?php echo $row_st['1']?>">
                                  <input type="submit" class="btn btn-primary" value="Submit">
                                  </center>.
                                
<?php
                      }
                            if($row_st['4']=='V')
                            {  ?>
                              <h4>User Certificate is Verified</h4>
                              <input type="checkbox" name="ver" value="N">Not Verified<br><br>
                              <input type="hidden" name="name1" value="<?php echo $row_st['1']?>">

                               <input type="submit" class="btn btn-primary" value="Submit">  

                           <?php }                            
?>

                
             </form></center>
              <?php
                            $pas_value = $_POST["ver"];
                            $pas_value1 = $_POST["name1"];
                            //echo $pas_value1;
                            //insert into db file name
                            $query_1="UPDATE register_can SET status ='$pas_value' WHERE name='$pas_value1'";
                            //echo $query_1;
                            $conn->query($query_1); ?>
                            
  <?php
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

//echo $_POST['mail'];
// $sql = "INSERT INTO register_nodal(name,nodal_id,password,email)VALUES ($_POST[fname],$_POST[govid],$_POST[pass],$_POST[mail])";
// $sql = "INSERT INTO meet_link(userid,meet_link_column)VALUES ('$_POST[userid_meet]','$link_var')";

$sql_1 = "INSERT INTO meet_link(userid,meet_link_column)VALUES ('$_POST[userid_meet]','$_POST[meetlink]')";

$sql_2 = "INSERT INTO message(userid,message_txt)VALUES ('$_POST[userid_meet]','$_POST[message]')";

$conn_1->query($sql_1);
$conn_1->query($sql_2);
// header("Location:dept/tables_can.php");
$conn_1->close();




?>        