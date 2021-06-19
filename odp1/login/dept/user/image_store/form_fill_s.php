<!DOCTYPE html>
<html lang="en">

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class='fas fa-address-book' style='font-size:24px'></i>
        </div>
        <div class="sidebar-brand-text mx-3">ODP</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="javascript:history.go(-1)" >
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
          
            <h1 style="font-size:200%; solid DodgerBlue;text-transform: Uppercase">School Education</h1>

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


<form action="insert/insert_applying_school.php" method="post">
 <div>
   <center>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">personal details:</h1>
<hr>
    <h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">Adhar card number:</h1>
    <input type="number" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter Aadhar number " name="aadhar_number" required><br><br>
<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">First name:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter First name" name="fname" required><br><br>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">last name:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter Last name" name="lname" required><br><br>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">phone number:</h1>
     <input type="number" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter Phone Number" name="ph_number" required><br><br>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">email id:</h1>
    <input type="email" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter email id" name="email_id" required="@"><br><br>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">address:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" placeholder="Enter address" name="address" align="center" required><br><br>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">bank account details:</h1>
<hr>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">bank name:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" placeholder="Enter bank name" name="bank_name" align="center" required><br><br>

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">Branch:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" placeholder="Enter branch name" name="branch_name" align="center" required><br><br>

    

<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">account holder name:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" placeholder="Enter account holder name" name="acct_hold_name" align="center" required><br><br>
    
<h1 style="font-size:150%; solid DodgerBlue;text-transform: Uppercase">account number:</h1>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" placeholder="Enter account number" name="acct_number" align="center" required><br><br>

    
    
  <input type="submit" class="btn btn-primary" value="Submit">
  </center>
 <br>
  <br>
</div>
</form>

  </body>
</html>