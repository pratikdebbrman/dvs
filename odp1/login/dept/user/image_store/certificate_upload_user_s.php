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
        <a class="nav-link" href="logout.php" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
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
          
            <h1 style="font-size:200%; solid DodgerBlue;">Certificate Upload and See Your Status</h1>

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
  <!-- <form action="" method="post" enctype="multipart/form-data">

    <input  class="form-control form-control-user border-0 small required"  type="text" name="userid_1" placeholder="Enter your User Id"><br><br>

<input type="submit" class="btn btn-primary" value="See Your Status"><br><br> -->

    <?php 
     

                      if (
                        isset($_SESSION["username"]) && isset($_SESSION["password"]) 
                        // &&    $_POST[userid_1]!='userid'
                      )
                      {
                   
                        ?>

       <form action="" method="post" enctype="multipart/form-data">
         
    <input  class="form-control form-control-user border-0 small required"  type="text" name="userid_1" placeholder="Enter your User Id"><br><br>

<input type="submit" class="btn btn-primary" value="See Your Status"><br><br>
<a href="http://localhost/BENGALATHON/odp1/login/dept/user/image_store/certificate_upload_user_s.php">
<input type="submit" class="btn btn-primary" value="Refresh the Page"><br><br></a>
<?php
                              if ( $_POST[userid_1]!='')
                              {
                               
                                $conn = mysqli_connect("localhost","root","","project_1");

                                // $query_list="SELECT id FROM tbl_images WHERE userid=' $_POST[userid_1]'";
                                

                                //echo $query_list;
                                //$result_1 = mysqli_query($conn,$query_list);
                                //$row_1 = mysqli_fetch_array($result_1);

                                $query_st = "SELECT * FROM register_can WHERE name='$_POST[userid_1]'"; 
                                                 
                                               $result_st = mysqli_query($conn,$query_st);
                                               $row_st = mysqli_fetch_row($result_st);

                          if($row_st['4']=='V')
                              {?>
                                <br/>
                                  <center> <p style="font-size: 40px;">Your Certificates Verified</p></center>
                                  <center><a href="/BENGALATHON/odp1/login/dept/user/image_store/certificates_user/s.pdf"><b><p style="font-size: 40px;">To Apply Offline  Download Form</p></b></a></center>
                                  <center><a href="/BENGALATHON/odp1/login/dept/user/image_store/form_fill_s.php"><b><p style="font-size: 40px;">To Apply Online</p></b></a></center>
                                 <?php
                               }
                      if($row_st['4']=='N')
                                   {?>
                                   <center> <p style="font-size: 40px;">Your Certificates Yet Not Verified</p></center>
                                  <?php 
                                  $query_list = "SELECT meet_link_column FROM meet_link ORDER BY meet_link_column ASC  LIMIT 1";
                                  $result_st_1 = mysqli_query($conn,$query_list);
                                  $row_st_1 = mysqli_fetch_row($result_st_1);
                              echo "Visit the link for Verification Process.";?>
                              <b> <br><?php echo $row_st_1['0'];?> </b>
                              <?php
                               }
                            }
                      ?>
                      <br>
    
    <?php 
                    }
                    else
                    {
                      header('Refresh: 2; URL =logout.php');
                    }

                ?>
  </form>

  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <h1 style="font-size:200%; ">After Uploadation Of Certificates go to Docverifier For Further Verification</h1>
</nav>
  <!-- <form action="upload_final_s.php" method="post" enctype="multipart/form-data"> 
    <input class="form-control form-control-user border-0 small required" type="text" name="userid_2" placeholder="Enter your User Id"><br><br>
    
    <input class="form-control bg-light border-0 small" type="file" name="uploadfile" value="" /><br><br>
    
  <?php 
                      // if (isset($_SESSION["username"]) && isset($_SESSION["password"]))
                      {
                      ?>
    <input type="submit" class="btn btn-primary" value="Click here to upload your Certificates"><br><br>

<?php 
                    }
                    // else
                    {
                      // header('Refresh: 2; URL =logout.php');
                    }
                ?>
  </form> -->
   <form action="" method="post" enctype="multipart/form-data"> 
    <input class="form-control form-control-user border-0 small required" type="text" name="userid_2" placeholder="Enter your User Id"><br><br>
    
    
    <a href="https://script.google.com/macros/s/AKfycbwUN1x0PEBOja_D1k6KmiZD1JJW-y4nleRsUcdgLaQlvINNmJE/exec" target="popup" onclick="window.open('https://script.google.com/macros/s/AKfycbwUN1x0PEBOja_D1k6KmiZD1JJW-y4nleRsUcdgLaQlvINNmJE/exec' , 'name', 'width=600 height= 400 ' )"><input type="submit" class="btn btn-primary" value="Click here to upload your Certificates"></a><br><br>


  </form>

<?php
// $conn = mysqli_connect("localhost","root","","project_1");

// // $query_list="SELECT id FROM tbl_images WHERE userid=' $_POST[userid_1]'";
// $query_list = "SELECT * FROM tbl_images WHERE userid='$_POST[userid_1]'";

// //echo $query_list;


// $result_1 = mysqli_query($conn,$query_list);

// //$row_1 = mysqli_fetch_array($result_1);

// $query_st = "SELECT * FROM register_can WHERE name='$_POST[userid_1]'"; 
                 
//                $result_st = mysqli_query($conn,$query_st);
//                $row_st = mysqli_fetch_row($result_st);
               // echo $row_st['4'];
                
                     //die();     
// print_r($row_1);
// die();
/*if($row_st['4']=='V')
                      {?>
                        <br/>
                          <center> <p style="font-size: 40px;">Your Certificates Verified</p></center>
                          <center><a href="/BENGALATHON/odp1/login/dept/user/image_store/certificates_user/s.pdf"><b><p style="font-size: 40px;">To Apply Offline  Download Form</p></b></a></center>
                          <center><a href="/BENGALATHON/odp1/login/dept/user/image_store/form_fill_s.php"><b><p style="font-size: 40px;">To Apply Online</p></b></a></center>
                         <?php
                       }
                      if($row_st['4']=='N')
                       {?>
                       <center> <p style="font-size: 40px;">Your Certificates Yet Not Verified</p></center>
                      <?php 
                      $query_list = "SELECT meet_link_column FROM meet_link ORDER BY meet_link_column ASC  LIMIT 1";
                      $result_st_1 = mysqli_query($conn,$query_list);
                      $row_st_1 = mysqli_fetch_row($result_st_1);
                  echo $row_st_1['0'];
                    } */


// echo "USER ID&nbsp<br>";
// echo "$_POST[userid_1]<br>";
// echo "CERTIFICATES<br>";


//while($row_1 = mysqli_fetch_array($result_1)) {
  //echo $row_1[image_name];


 ?>
  
 <!-- <a href="/BENGALATHON/odp1/login/dept/user/image_store/certificates_user/<?php //echo $row_1['userid']?>/<?php //echo $row_1['image_name']; ?>" download><?php //echo $row_1['image_name']; ?></a>&nbsp&nbsp&nbsp&nbsp -->

<?php
//}

$conn->close();
?>
</body>
</html>