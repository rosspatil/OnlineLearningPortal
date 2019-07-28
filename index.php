<?php 

      session_start();
	if (isset($_GET['email']))
	   {
	   		$_SESSION['email'] = $_GET['email'];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nexmetric</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/index.css">
	<!-- stylesheet for Horizontal Scroll -->
	<link rel="stylesheet" href="css/hscroll.css">
	<link rel="stylesheet" href="css/jquery.mThumbnailScroller.css">
<!-- 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
 -->	<!-- End Horizonatl CSS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>



	<!-- Admin LTE -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

	<!-- End Admin LTE -->
	
</head>

<style type="text/css">




.list-title{
	font-size: 32px;
	font-family: Open Sans,sans-serif;
	font-weight: 100;
	line-height: 120%;
}
.card-title{
	margin-top: 5px;
	font-size: 20px;
	font-family: Open Sans,sans-serif;
	font-weight: normal;
	line-height: 22px;
}
.card-university p{
	margin-top: 1px;
	font-size: 15px;
	color: #4c2a01;
	font-family: Open Sans,sans-serif;
	font-weight: normal;
	line-height: 18px;
}
.see-all{
	padding: 15px;
	width: 100px;
	margin-right: 30px;
}

.front-video{
	position:absolute;
	z-index: 0;
	filter: brightness(40%);
	top:150px;
	left: 15px;
	height: auto;
	width:950px;
	border-radius: 25px;
}
.blog{
	position:absolute;
	z-index: 1;
	left: 960px;
	top: 140px;
}
.cards:hover{
	display: block;
	width: 300px;
	height: 138px;
	position: relative;
	margin-top: 10px;
	border-radius: 5px;
	font-family: Open Sans,sans-serif;
	font-size: 22px;
	color: blue;
	background: linear-gradient(336deg, rgba(0,0,225,.4), rgba(0,0,225,0) 70%),
    linear-gradient(127deg, rgba(225,0,0,.1), rgba(225,0,0,0) 70.71%);

}
.cards{
	display: block;
	background-color: #f4f6f9;
	width: 300px;
	height: 138px;
	position: relative;
	margin-top: 10px;
	border-radius: 5px;
	font-family: Open Sans,sans-serif;
	font-size: 22px;
	color: blue;
	cursor: pointer;
	background: linear-gradient(127deg, rgba(0,0,225,.1), rgba(0,0,225,0) 70%),
    linear-gradient(336deg, rgba(225,0,0,.4), rgba(225,0,0,0) 70.71%);
    /*background: linear-gradient(127deg, rgba(0,225,0,.4), rgba(0,225,0,0) 70%),
    linear-gradient(336deg, rgba(0,225,0,.4), rgba(0,225,0,0) 70.71%);*/

}
.cards img{
	height: 126px;
	width: 150px;
	max-width: 100%;
	left: 0px;
}
.overlay {
	position:absolute;
	top:35%;
	left:20px;
	z-index:1;
}
h3{
	margin-top: -02px;
	font-size: 20px;
	line-height: 120%
	text-decoration: underline;
	margin-left: 25px;
	opacity: 0.7;
}
h4{
	font-size: 16px;
	color: #158772;
	line-height: 120%;
}
h5{
	font-size: 16px;
	color: #4c2a01;
	opacity: 0.7;
	line-height: 120%;
}
h6{
	font-size: 15px;
	color: #000;
	opacity: 0.6;
	line-height: 120%;
}

.footer{
	background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) );
}
.rythm{
	background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) );
	color:#fff;
	font-size:16px;
	height: 40px;
	padding-top: 7px;
	font-weight: 100;
}

</style>


<script> 

window.onclick=function	ret(){	
	var vid = document.getElementById("videos");	
	vid.pause();
}
</script>
<body>



	<?php  include 'navigation.php' ?>
	<!-- Header background-->
		
			<div class=" md-search w3-hide-large" style="width:100%">
				<form action="search.php" method="post">					
							<input type="text" class="search-md line" name='q' id='search' placeholder="Search"/>
				
							<button type="submit" >
								  	<i   class="material-icons " style="opacity:1;cursor:pointer">search</i>
							</button>
					
				</form>
			</div>

	<div class="bg-img w3-hide-large">		
		<p class="big-img-text"> The Next Generation AI</p>
		<a href="#myModal1" class="btn big-img-btn  btn-lg btn-primary" data-toggle="modal">Join for free</a>
		<a href="#myVideo" data-toggle="modal" ><img class="big-img-icon " src="images/play-icon.png"/></a> 
	</div>



	<div class="bg-img w3-hide-small w3-hide-medium">
		<div class=" w3-left " >
			<video class="front-video"  autoplay loop="true" muted >
				<source src="video.mp4#t=30" type="video/mp4" />
			</video>
			<div class="overlay ">
				<p class="big-img-text"> The Next Generation AI</p>
				<a href="#myModal1" class="btn big-img-btn  btn-lg " data-toggle="modal">Join for free</a>
				<a href="#myVideo" data-toggle="modal" ><button  type="button"  class="big-img-icon " style="background-color: transparent;"><img  src="images/play-icon.png"/></button></a> 
			</div>

		</div>
		<div class="blog">
			<ul>
				<a href="course.php?q=course"><li class="cards">
					<div class="col-sm-4">
						<img src="images/AI.png" alt="data-science">
					</div>
					<div class="col-sm-8 ">
						<h4>Artificial Intelligence</h4>
						<h5>Deadline 20 June</h5>
						<h6>Use AI to make machine act like human</h6>
						<h3>Apply now</h3>
					</div>

				</li></a>
				<a href="course.php?q=course"><li class="cards">
					<div class="col-sm-4">
						<img src="images/robot.png" alt="data-science">
					</div>
					<div class="col-sm-8 ">
						<h4>Robotics</h4>
						<h5>Deadline 01 July</h5>
						<h6>Learn Robotics to reduce human efforts.</h6>
						<h3>Apply now</h3>
					</div>

				</li></a>

				<a href="course.php?q=course"><li class="cards">
					<div class="col-sm-4">
						<img src="images/robot.png" alt="data-science">
					</div>
					<div class="col-sm-8 ">
						<h4>Robotics</h4>
						<h5>Deadline 01 July</h5>
						<h6>Learn Robotics to reduce human efforts.</h6>
						<h3>Apply now</h3>
					</div>

				</li></a>

			</ul>
		</div>

	</div>

	<div class="modal fade" id="myVideo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	aria-hidden="true" style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));">
	<div class="modal-dialog modal-lg " style="width: 90%;">
		<div class="modal-header" style="margin-top: 30px;">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<i class="glyphicon glyphicon-remove w3-large" style="background: #fff;"></i></button>

			</div>
			<div class="modal-content"  >
				<video id="videos"  style="width:100%"  loop controls >
					<source src="video.mp4" type="video/mp4"/>
				</video>
			</div>
		</div>
	</div> 
	<!-- Header End -->
	<div >
		<div  class="w3-hide-small w3-hide-medium" style="width:100%">
			<div class="col-sm-3 rythm w3-center">
				<p>Big Data and Hadoop Certifications</p>
			</div>
			<div class="col-sm-3 rythm w3-center">
				<p>Business Analytics Fundamentals</p>
			</div>
			<div class="col-sm-2 rythm w3-center">
				<p>Data Science with Python</p>
			</div>
			<div class="col-sm-4 rythm w3-center">
				<p>Android Application Development for Beginners</p>
			</div>

		</div>
		<div class="w3-hide-small w3-hide-medium" style="width:100%">
			<div class="col-sm-3 " style="background-color:#fcb635;height:8px;">
			</div>
			<div class="col-sm-3 " style="background-color:#01bc65;height:8px;">
			</div>
			<div class="col-sm-2 " style="background-color:#019fbc;height:8px;">
			</div>
			<div class="col-sm-4 " style="background-color:#d87c1a;height:8px;">
			</div>

		</div>

		<br><br><br>
		<p class="w3-center"><span class="list-title" >Learn On the Go!</span></p>
		<div class="motive" style="margin-left:8%">
			<div class="col-sm-4 w3-center">
				<img src="images/225.jpg" style="width:160px;height:150px;">
				<h2 >Course Bundle</h2>
				<p >Achieve your career goal with industry recognised learning path</p>
			</div>
			<div class="col-sm-4 w3-center">
				<img src="images/226.jpg" style="width:180px;height:150px;">
				<h2>Online Self-Learning</h2>
				<p >You will recieve lecture videos and you can go through the course.</p>
			</div>
			<div class="col-sm-4 w3-center">
				<img src="images/227.jpg" style="width:160px;height:150px;">
				<h2>Certification</h2>
				<p >You will recieve a course completion certificate from Certs-school.</p>
			</div>
		</div>
	</div>	
	

	<!-- Courses Section -->

	<!-- Subject-1 Content -->
	<div class="w3-padding-24" style="margin-top:25%">
		<p class="w3-center"><span class="list-title" >Robotics</span><button class="w3-button w3-white w3-border w3-right see-all">See all</button></p>
		<div id="demo w3-container w3-padding-24">

			<!-- demo content -->
			<div id="content-1" class="content">
				<ul>
					<a href="course.php"><li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li></a>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Python for Everybody</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>	
	<!-- End Subject-1 -->


	<!-- Subject-2 content -->
	<div class="w3-padding-24">
		<p class="w3-center"><span class="list-title"  >Big Data</span><button class="w3-button w3-white w3-border w3-right see-all">See all</button></p>
		<div id="demo  w3-container w3-padding-24">
			<div id="content-2" class="content">
				<ul>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>
	<!-- End Subject-2 -->

	<!-- Subject-3 content -->
	<div class="w3-padding-24">
		<p class="w3-center"><span class="list-title">Machine Learning</span><button class="w3-button w3-white w3-border w3-right see-all">See all</button></p>
		<div id="demo  w3-container w3-padding-24">
			<div id="content-3" class="content">
				<ul>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
					<li>
						<div class="w3-border display-card w3-light-grey">
							<img src="images/data-science.png" height="200px" width="200px;">
							<div class="card-university">
								<p>Univesity</p>
							</div>
							<div class="card-title">
								<p>Data Science</p>
							</div>
							<div class="card-footer">
								<p>10 Courses</p>
							</div>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>
	<!-- End Subject-3 -->

	<div class="w3-center">
		<button class="btn " style="width:150px;height:60px;margin:30px;background:#3498db;color:#fff;font-size:20px;font-weight:normal">See all</button>
	</div>
	<!-- End Courses-->

	<?php include 'footer.php'?>


	<script src="js/awesomplete.js"></script>
	<script src="js/awesomplete.min.js"></script>
	<link rel="stylesheet" href="css/awesomplete.css">

	</body>
	</html>