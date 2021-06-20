<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

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

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class='fas fa-address-book' style='font-size:24px'></i>
        </div>
        <div class="sidebar-brand-text mx-3">ODC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="javascript:history.go(-1)" >
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
          
            <h1 style="font-size:200%; solid DodgerBlue;text-transform: uppercase">Backward Classes Welfare</h1>

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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<center>
  <br>

<?php
//connecting to database
$conn = mysqli_connect("localhost","root","","project_1");
//$date = date('Y-m-d');
// echo $date;
//$query="SELECT * from schemes_of_school WHERE exp_date >'$date'";
// echo $query;
// die();
//fetching query
//$result = mysqli_query($conn,$query);
$query="SELECT * from schemes_of_bcw WHERE exp_date > NOW()
ORDER BY id desc";
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">SERIAL NUMBER</font> </td> 
          <td> <font face="Arial">SCHEME NUMBER</font> </td> 
          <td> <font face="Arial">CRITERIA</font> </td> 
          <td> <font face="Arial">EXPERIE DATE</font> </td> 
          
          <td> <font face="Arial">CERTIFICATES REQUIRED</font> </td>
          <td> <font face="Arial">APPLY</font> </td>
          
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["scheme_number"]; ?></td>
<td align="center"><?php echo $row["schemes_criteria"]; ?></td>
<td align="center"><?php echo $row["exp_date"]; ?></td>

<td align="center"><?php echo $row["certificates"]; ?></td>
<td align="center">
<?php 
                      if (isset($_SESSION["username"]) && isset($_SESSION["password"]))
                      {
                      ?>
<a href="apply_bcw_user.php?id=<?php echo $row["id"]; ?>">Apply</a>
<?php 
                    }
                    else
                    {
                      header('Refresh: 2; URL =logout.php');
                    }
                ?>
</td>

</tr>
<?php $count++; } ?>
<?php
    /*while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["criteria"];
        $field3name = $row["exp_date"];
        $field4name = $row["max_persons"];
        $field5name = $row["certificates"];

        
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'<br></td>                 
              </tr>';
    }*/
    $result->free();
?>


  </body>
</html>