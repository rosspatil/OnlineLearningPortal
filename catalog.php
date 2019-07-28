
<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>search page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
    
   
    	

	</style>
</head>
<body>
<?php include 'navigation.php'?>

<div class="container">	
	<h3 style="color:#030182;"><?php echo $_GET['q']  ?></h3>
	<hr>
	<a href="./course.php?q=xyz">
	<div class=" result-card w3-card-2">
		<div class="img" >
			<img src="images/data-science.png" alt="data-science">
		</div>
		<div class="details" style="margin-left:-50px;">			
			<div class="card-title">
				<p>Data Science</p>
			</div>
			<div class="card-university">
				<p>Univesity</p>
			</div>
			<div class="card-details">
				<p>Data science is the profession of the future, because organizations that are unable to use (big) data in a smart way will not survive. It is not sufficient to focus on data storage and data analysis. </p>
			</div>
		</div>
	</div></a>
	<a href="./course.php?q=xyz">
	<div class=" result-card w3-card-2">
		<div class="img" >
			<img src="images/data-science.png" alt="data-science">
		</div>
		<div class="details" style="margin-left:-50px;">			
			<div class="card-title">
				<p>Data Science</p>
			</div>
			<div class="card-university">
				<p>Univesity</p>
			</div>
			<div class="card-details">
				<p>Data science is the profession of the future, because organizations that are unable to use (big) data in a smart way will not survive. It is not sufficient to focus on data storage and data analysis. </p>
			</div>
		</div>
	</div></a>
	<a href="./course.php?q=xyz">
	<div class=" result-card w3-card-2">
		<div class="img" >
			<img src="images/data-science.png" alt="data-science">
		</div>
		<div class="details" style="margin-left:-50px;">			
			<div class="card-title">
				<p>Data Science</p>
			</div>
			<div class="card-university">
				<p>Univesity</p>
			</div>
			<div class="card-details">
				<p>Data science is the profession of the future, because organizations that are unable to use (big) data in a smart way will not survive. It is not sufficient to focus on data storage and data analysis. </p>
			</div>
		</div>
	</div></a>
	
</div><br>
<br>
<?php include 'footer.php'?>
</body>
</html>