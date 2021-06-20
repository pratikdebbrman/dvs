<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    
    <style>
    body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
    .error{
        color:red;
        font-size:15px;
        margin-bottom: 0px !important;
    }
    .form-group {
        margin-bottom: 4px !important;
    }
    </style>
</head>
<body>
<?php require_once "PHPMailere/autoload.php"; ?>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
			<?php
				if($_SESSION['status'] == 'S'){
			?>
			<div class="alert alert-success">
				<strong>Success!</strong> Indicates a successful or positive action.
			</div>
			<?php
				}
				$_SESSION['status'] = '';
			?>
                <form action="smtp.php" id="ContactForm" method="post">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="name">Your Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" name="name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="mail">Your Mail:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control email" id="mail" placeholder="Enter Your Mail" name="mail" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="subject">Subject:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="message">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="message" name="message" required></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
                </form>
			</div>
		</div>
	</div>
</div>
</body>
<script src="jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        $('#ContactForm').validate();
    });
</script>
</html>