
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
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/search.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">


	

	.row{
		margin: auto;
	}



	

	


	</style>
</head>
<body>
	<?php include 'navigation.php'?>
	<?php include 'config.php'?>
	<?php   

	$limit=1;
	if (isset($_GET["page"])) { 
		$page  = $_GET["page"]; 
	} else {
		$page=1;
	};  
	$start_from = ($page-1) * $limit;  
		// $keyword=$_GET("q");

	$sql = "SELECT * FROM posts ORDER BY title ASC LIMIT $start_from, $limit";  
	$rs_result = mysql_query ($sql);  
	?>

	<!-- <table class="table table-bordered table-striped">  
		<thead>  
			<tr>  
				<th>title</th>  
				<th>body</th>  
			</tr>  
			<thead>  
				<tbody>  
					<?php  
					while ($row = mysql_fetch_assoc($rs_result)) {  
						?>  
						<tr>  
							<td><?php echo $row["title"]; ?></td>  
							<td><?php echo $row["body"]; ?></td>  
						</tr>  
						<?php  
					};  
					?>  
				</tbody>  
			</table> -->




	 <div class="container">	
	<h3 style="color:#030182;">10 results found for your search</h3>
	<hr>
	<div class="record">
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

	</div>
	<div> 
	<center>
		<ul class="pagination ">


			<?php  
			$sql = "SELECT COUNT(*) FROM posts";  
			$rs_result = mysql_query($sql);  
			$row = mysql_fetch_row($rs_result);  
			$total_records = $row[0];  
			$total_pages = ceil($total_records / $limit);  
			$pagLink = "<div class='pagination '>";  
			for ($i=1; $i<=$total_pages; $i++) {  
				if ($i==$page) {
					$pagLink .= "<li class='active'><a href='search.php?page=".$i."'>".$i."</a></li>";  
				}else{

					$pagLink .= "<li ><a href='search.php?page=".$i."'>".$i."</a></li>";  

				}
			};  
			echo $pagLink . "</div>";  
			?>

		</ul>
		</center>

	</div>
	
	
</div><br>
<br>
<?php include 'footer.php'?>
</body>
</html>

