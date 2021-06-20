<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <title>ODPBYQUIBITS</title>
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
        <div class="sidebar-brand-text mx-3">ODP</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="javascript:history.go(-3)" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
        <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <a><button class="rounded-circle border-0" id="sidebarToggle" onClick="javascript:history.go(-1)"></button></a>


      </div>

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
   
    <input class="btn btn-primary" type="submit" name="search" value="Click to search" /><br><br>
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

echo $row_1['userid'];?><br><?php 
echo "CERTIFICATES<br>";

while($row = mysqli_fetch_assoc($result)) {

 ?>
  <tr>
    
  <td align="center"><a href="/BENGALATHON/odp1/login/dept/user/image_store/certificates_user/<?php echo $row_1['userid']?>/<?php echo $row['image_name']; ?>" download><?php echo $row['image_name']; ?></a>&nbsp&nbsp&nbsp&nbsp<br>
    
  </td>
    </tr>

                                
<?php }     
               $query_st = "SELECT * FROM register_can WHERE name='$_POST[userid]'"; 
                      
               $result_st = mysqli_query($conn,$query_st);
               $row_st = mysqli_fetch_row($result_st);
                   
                    // die();
               ?>
               <form action="" method="post">
                <?php
                      if($row_st['4']=='N')
                      { ?>
                            
                                  <center>
                                  <input type="checkbox" name="ver" class="largerCheckbox"value="V"><h1 style="font-size:100%; ">Verified</h1>
                                  <input type="hidden" name="name1" value="<?php echo $row_st['1']?>">
                                  <input type="submit" class="btn btn-primary" value="Submit">
                                  </center>.
                                
<?php
                      }
                            if($row_st['4']=='V')
                            {  ?>
                              
                              <input type="checkbox" name="ver" value="N">Not Verified<br><br>
                              <input type="hidden" name="name1" value="<?php echo $row_st['1']?>">
                               <input type="submit" class="btn btn-primary" value="Submit">   
                           <?php }                            
?>

                
             </form>
              <?php
                            $pas_value = $_POST["ver"];
                            $pas_value1 = $_POST["name1"];
                            //echo $pas_value1;
                            //insert into db file name
                            $query_1="UPDATE register_can SET status ='$pas_value' WHERE name='$pas_value1'";
                            //echo $query_1;
                            $conn->query($query_1); ?>
                            
          