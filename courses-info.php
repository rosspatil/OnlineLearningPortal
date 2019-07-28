<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- mobile settings -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Profile page</title>
<link rel="icon" href="data/favicon.ico">

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/trial.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" >
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/course-description.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="js/rating.js"></script>
    <link rel="stylesheet" href="css/jquery.mThumbnailScroller.css">
</head>
<body>

<!-- header section -->
	<?php include "navigation.php" ?>


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

					<h4>Enrolled Courses</h4>

					<div class="course-info-outer">
						<p class="course-name">Course name</p>
						<p class="course-bill-info">Free Course</p>
						<a class="remove-link" href="#">Remove Course</a> 
					</div>
				</div>	
			</div>
		</div>	


</body>
</html>