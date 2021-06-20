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
<link href="css/sb-admin-4.css" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-address-book" style="font-size:24px"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ODC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout_gov.php" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


         <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          
            <h1 style="font-size:150%; solid DodgerBlue;text-transform: uppercase">Add Nodal details & Docverifier details</h1>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            
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
  
<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>

<?php
//$result = mysqli_query($conn,$query);
$conn = mysqli_connect("localhost","root","","project_1");
$query="SELECT * from register_docverifier ORDER BY id desc";  // For adding doc_id

echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">SERIAL NUMBER</font> </td> 
          <td> <font face="Arial">DOCVERIFIER NAME</font> </td> 
          <td> <font face="Arial">DOCVERIFIER ID</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">PASSWORD</font> </td> 
          <td> <font face="Arial">DELETE</font> </td> 
          
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>

  <tr>
  <td align="center"><?php echo $count; ?></td>
  <td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["doc_id"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["password"]; ?></td>
<td align="center">
<a href="admin_delete_docid.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<br>
</center>
<?php $count++; } ?>

    <center><h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Add Details For Docverifier</h1>
<form action="admin_insert_docid.php" method="post">

  
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter new Docverifier name" name="doc_name"><br><br>

    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter new doc_id" name="doc_id"><br><br>
    
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter new email" name="email"><br><br>

    <input type="password" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter password" name="pass"><br>

  
  <!-- <?php 
                      #if (isset($_SESSION["username"]) && isset($_SESSION["password"]))
                      {
                      ?> -->
  <input type="submit" class="btn btn-primary" value="Add"></center>
<!-- <?php 
                    }
                    #else
                    {
                     # header('Refresh: 2; URL =logout_gov.php');
                    }
                ?> -->

</form>

<?php
//$result = mysqli_query($conn,$query);
$query="SELECT * from register_nodal ORDER BY id desc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">SERIAL NUMBER</font> </td> 
          <td> <font face="Arial">NODAL NAME</font> </td> 
          <td> <font face="Arial">NODAL ID</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">PASSWORD</font> </td> 
          <td> <font face="Arial">DELETE</font> </td> 
          
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td align="center"><?php echo $count; ?></td>
  <td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["nodal_id"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["password"]; ?></td>
<td align="center">
<a href="admin_delete_nodal.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<br>
<?php $count++; } ?>

    <h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Add Details For Nodal Officer</h1>
<form action="admin_insert_nodal.php" method="post">
 <div>
  <center>
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter new Nodal Officer name" name="nodal_name"><br><br>

    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter new nodal_id" name="nodal_id"><br><br>
    
    <input type="text" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter new email" name="email"><br><br>

    <input type="password" class="form-control form-control-user border-0 small required" style="width: 400px; height: 50px" style="border: 1px red" placeholder="Enter password" name="pass"><br>
</center>
  
  <!-- <?php 
                      #if (isset($_SESSION["username"]) && isset($_SESSION["password"]))
                      {
                      ?> -->
  <input type="submit" class="btn btn-primary" value="Add">

<!-- <?php 
                    }
                    #else
                    {
                     # header('Refresh: 2; URL =logout_gov.php');
                    }
                ?> -->
</div>
</form>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_school_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for School Education</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_a_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Agriculture</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_tevtsd_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Technical Education & Vocational Training and Skill Development</h1>
<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_bcw_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Backward Classes Welfare</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_cdwdsw_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Child Development and Women Development & Social Welfare</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_a_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Agriculture</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_he_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Higher Education</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_hfw_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Health & Family Welfare</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_pw_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Public Works</h1>

<?php

//$result = mysqli_query($conn,$query);
$query="SELECT * from applied_st_user ORDER BY id asc";  // For adding doc_id
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">ADDHAR NUMBER</font> </td> 
          <td> <font face="Arial">FIRST NAME</font> </td> 
          <td> <font face="Arial">LAST NAME</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">EMAIL ID</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BANK NAME</font> </td> 
          <td> <font face="Arial">BRANCH</font> </td> 
          <td> <font face="Arial">ACCOUNT HOLDER NAME</font> </td>
          <td> <font face="Arial">ACCOUNT NUMBER</font> </td>
      </tr>';

$count=1;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

  <td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["aadhar_number"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["ph_number"]; ?></td>
<td align="center"><?php echo $row["email_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["acct_hold_name"]; ?></td>
<td align="center"><?php echo $row["acct_number"]; ?></td>
<td align="center">

</td>
</tr>
<br>
<?php $count++; } ?>
<h1 style="font-size:150%; solid DodgerBlue;text-transform:uppercase">Applicant details for Science & Technology</h1>
  </body>
</html>