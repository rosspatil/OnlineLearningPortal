<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile settings -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Profile page</title>
<link rel="icon" href="data/favicon.ico">

<!--Web font css-->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900" rel="stylesheet" type="text/css"> -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet"> 
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!--Custom CSS-->
<link href="assets/css/animate.min.css" rel="stylesheet">
<link href="assets/css/master.css" rel="stylesheet">
<script src="assets/js/wow.min.js"></script>
<!--Icon font css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="assets/css/font-awesome.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- header section -->
	<?php include "navigation.php" ?>

<!-- Intro section -->
	<section class="page-section">
		<div class="container">
			<div class="col-sm-3 col-sm-offset-1">
				<div class="side-navbar">
					<h3>Account</h3>
					<ul>
						<li><a href="personal-info.php">Personal Information</a></li>
						<li><a href="password-info.php">Password</a></li>
						<li><a href="linked-accounts.php">Linked Acounts</a></li>
						<li><a href="courses-info.php" class="active">Courses</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="profile-cateogries">
					 <form>
					 	  <h4>Basic Information</h4>

						  <div class="form-group">
						    <input type="text" class="form-control" id="first-name" value="Akshay">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" id="last-name" value="Jadhav">
						  </div>
						  <div class="form-group">
						    <input type="email" class="form-control" id="email" value="akshsyjadhav.aj@gmail.com">
						  </div>
					</form> 
				</div>
				<div class="btn-outer">
					<button type="submit" class="btn custom-btn submit-btn pull-right">Save</button>
					<button type="submit" class="btn custom-btn cancel-btn pull-right">Cancel</button>
				</div>		
			</div>
		</div>	
	</section>


<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/wow.min.js"></script> 
</body>
</html>