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
          

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-5.css" rel="stylesheet">
  <style type="text/css">
    .error{
      color:red;
      font-size: none !important;
    }
    .user_id_exists{
       color:green;
    }
    .user_id_not_exists{
       color:red;
    }

  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register Yourself</h1>
              </div>
              <form action="smtp_doc.php" class="user" id="myform" method="post">
                <div class="form-group row">
                 
                    <input type="text" class="form-control form-control-user required" id="exampleFirstName" placeholder="Enter Your Name" name="fname">
                  
                </div>
                <div class="form-group row">
                  
                    <input type="text" class="form-control form-control-user required" id="doc_id" placeholder="Enter Your doc_id" name="docid">
                    <span class="doc_id_exists"></span><span class="doc_id_not_exists"></span>
                  
                </div>
              
                <div class="form-group row" >
                  <input type="email" class="form-control form-control-user required" id="exampleInputEmail" placeholder="Enter your Email Address"name="mail">
                </div>

                <div class="form-group row" >
                  <input type="password" class="form-control form-control-user required" id="exampleInputpass" placeholder="Enter password"name="pass">
                </div>
                
                 <input type="submit"class="btn btn-primary btn-user btn-block" value="Create Your Account">
               
                
              </form>
              
              <div class="text-center">
                <a class="small" href="login_docverifier.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/jquery/jquery.validate.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#myform").validate();
        $("#doc_id").blur(function(event){

          
          // setup some local variables
          var value = $(this).val();
          //alert(value);
          // Fire off the request to /form.php
          $.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : 'check_docverifier_register.php', //Your form processing file URL
            data: {name: value},
            dataType  : 'json',
            success   : function(data) {
                            if (data.success==true) { 
                              //console.log('success');
                              $('.doc_id_exists').html(data.posted);
                              $('.doc_id_not_exists').html('');
                              $('#doc_id').removeClass('required');
                                
                            }
                            if(data.error==false) {
                              //console.log("error");
                                    $('.doc_id_not_exists').html(data.posted); //If successful, than throw a success message
                                    $('.doc_id_exists').html('');
                                    //$('#user_id').addClass('required');
                                   // $("#user_id").addClass("error");
                                    $('#doc_id').val('');
                                
                                }
                            }
          });
        });


    });
  </script>

</body>

</html>
