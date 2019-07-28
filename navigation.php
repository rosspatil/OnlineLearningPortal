
<style type="text/css" >

@import url(https://fonts.googleapis.com/icon?family=Material+Icons);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

#wrap {
  margin-left: 12px;
  display: inline-block;
  height: 30px;
  float: left;
  position: relative;
}

 .elements input[type="text"] {
  height: 35px;
  font-size:22px;
  display: inline-block;
  color: #494c4f;
  width: 50px;
  outline: none;
  border:none;
  position: relative;
  top: 10px;
  background-color: #fff;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
  opacity:0;
}

.elements input[type="text"]:focus:hover {
  border-bottom: 1px solid #a9adb2;

}
a{
 text-decoration: none !important;
}
.elements input[type="text"]:focus {
  top: 10px;
  width: 300px;
  z-index: 3;
  border-bottom: 1px solid #a9adb2;
  cursor: text;
  opacity: 1;
}
.line{
	border-left-width: 2px;
	border-left-style: solid;
	border-left-color: #a9adb2;
}

.button1{
	top: -25px;
    background-color: Transparent;
}
.button1 button{
	background: transparent;
	height: 30px;
}
.button1 button i{
	margin-top: -7px;
}
body,html{

	font-family: Open Sans,sans-serif;
	font-weight: 300;
}

.navbar .Catalog-li{
	font-size: 18px;
	font-family: Open Sans,sans-serif;
	font-weight: 300;
	line-height: 120%;
}

.user-nav{
	height: 40px;
}
.user-nav-image{
	width: 40px;
	height: 50px;
}
</style>
<script >

	

    $(document).on('focus', '.elements:not(input,text)', function() {

       var search=document.getElementById("srbtn");
        $("#srbtn").removeClass("line");
		search.style.left="290px";
		search.style.cursor="pointer";
    });
    $(document).on('focusout', '.elements:not(input,text)', function() {
       var search=document.getElementById("srbtn");
		search.style.left="10px";
		search.style.cursor="pointer";
		$("#srbtn").addClass("line");
    });


</script>
	<script src="js/navigation.js"></script>



<div style="width:100%;font-family:Open Sans,sans-serif;height:25px;background-color:#3498db;color:#fff;font-size:18px;font-weight:500">
	<p class="w3-center">Offer: Save 80% on all courses. Limited Period!</p>
</div>
<nav class="navbar navbar-default w3-card-2 w3-white" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php"><font style="font-size: 40px;color: #002266;line-height:18px;font-family:Open Sans,sans-serif;">Nexmetric</font></a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style="margin-top:2px;">

		<div class="col-md-2 w3-hide-small w3-hide-medium" style="margin-right:-45px;margin-left: 300px;width:160px;top:10px;height:30px;">
			<a href="#" style="font-size: 18px;color:#494c4f;font-family: Open Sans,sans-serif;">Best Sellers</a>
		</div>
		
			<div class="dropdown col-md-2 line w3-hide-small w3-hide-medium" style="margin-left: 5px;width:170px;top:10px;height:30px;">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span style="font-size: 18px;color:#494c4f;font-family:Open Sans,sans-serif;font-weight:200">Online Courses</span></a>
				<ul class="dropdown-menu">
					<li class="Catalog-li"><a href="catalog.php?q=robotics">Robotics</a><hr ></li>
					
					<li class="Catalog-li"><a href="catalog.php?q=machine+learning">Machin Learning</a><hr ></li>
					
					<li class="Catalog-li"><a href="catalog.php?q=big-data">Big Data</a><hr ></li>
					
					<li class="Catalog-li"><a href="category.php">See All</a></li>
				</ul>
			</div>
		
		<div class="col-sm-2 col-md-2 w3-hide-small w3-hide-medium" style="margin-left: -30px;">
			
			<div id="wrap" class="elements" >
			  <form action="search.php" method="get" autocomplete="on">
				  <input onclick="srbtn()" id="search" name="q" type="text" placeholder="What're you looking for ?">
					  <div class="input-group-btn button1 line" id="srbtn">
					  	<button type="submit" class="btn ">
					  	<i   class="material-icons  " style="font-size:32px ;opacity:0.6;cursor:pointer">search</i>
					   </button></div>
			  </form>
			</div>
		</div>
		<?php
 			
    if(! isset($_SESSION['email']))  
    { ?>
		<div class="col-sm-2 w3-right w3-hide-small w3-hide-medium"  style="top:10px;font-family:  Open Sans,sans-serif;font-size: 16px;">
			<div class="col-sm-2 " style="margin-right: 20px;margin-left:20px;"><a href="#myModal"  data-toggle="modal">Login</a></div>
			<div class="col-sm-2 line " style="margin-right: 5px;margin-left:20px;margin-top:-3px; "><a href="#myModal1"  data-toggle="modal"><button class=" btn btn-md" style="background:#3498db;color:#fff;width:100px;">SignUp</button></a></div>
		</div>
		<ul class="nav navbar-nav navbar-right w3-hide-large">
			<li style="margin-right: 15px;font-family:  Open Sans,sans-serif;font-size: 20px;"><a href="#myModal" class="w3-text-blue" data-toggle="modal">Login</a></li>
			<li style="margin-right: 15px;font-family:  Open Sans,sans-serif;font-size: 20px;"><a href="#myModal1" class="w3-blue w3-button w3-round" data-toggle="modal">SignUp</a></li>
		</ul> 
    <?php }else{	?>
		 
		

		 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <ul class="w3-right user-nav dropdown"><img
			src="dist/img/avatar5.png" class="user-nav-image" alt="User Image">
			<span >Maketing Admin<span></a>
				<ul class="dropdown-menu w3-right">
			
			<a href="#"><li style="width:100%;padding:5px;width:200px;">
			Profile
		</li></a>
		<hr>
		<a href="logout.php"><li style="width:100%;padding:5px;">
			Logout
		</li></a>
								
							</ul>


							</ul> 
	 <?php	} ?>
	</div><!-- /.navbar-collapse -->
</nav>  

<!-- Login Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				×</button>
				<h4 class="modal-title" id="myModalLabel">
					Login</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="Login">
									<form role="form" class="form-horizontal">
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												Email
											</label>
											<div class="col-sm-10 login_email">
												<input type="email" class="form-control" id="login_email" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1" class="col-sm-2 control-label">
												Password
											</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" id="login_password" placeholder="password" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="button" id="login" class="btn btn-primary btn-md">
													Submit
												</button>
												<a href="#myModal2" data-dismiss="modal" data-toggle="modal">Forgot your password?</a>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-sm-6">
												<a href="#myModal1" data-dismiss="modal" data-toggle="modal"><p style="margin-left:100px;">Create free account</p></a>
											</div>
										</div>
										<br>
										
									</form>
								</div>
								
							</div>
							<div id="OR" class="hidden-xs">
								OR
							</div>
						</div>
						<div class="col-md-4">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3>
										Sign in with
									</h3>
								</div>
								<div class="col-md-12">
									<div class="btn-group btn-md btn-group-justified">
										<a href="#" class="btn  btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
										Google</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Login modal -->

	<!-- SignUp Modal -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					×</button>
					<h4 class="modal-title" id="myModalLabel">
						Registration</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#Registration1" data-toggle="tab">Registration</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									
												<div class="tab-pane active" id="Registration1">
													<form role="form" class="form-horizontal">
														<div class="form-group ">
															<label for="signup_name" class="col-sm-2 control-label">
																Name</label>
																<div class="col-sm-10">
																	<div class="row">

																		<div class="col-md-12">
																			<input type="text" class="form-control " id="name" name="name" placeholder="Name" autocomplete="off" />
																		</div>
																	</div>
																</div>
															</div>
															<div class="form-group  ">
																<label for="email" class="col-sm-2 control-label ">
																	Email</label>
																	<div class="col-sm-10 signup_email">
																		<input type="email" class="form-control"  placeholder="Email" id="signup_email" autocomplete="off"/>
																	</div>
																</div>

																<div class="form-group">
																	<label for="password" class="col-sm-2 control-label">
																		Password</label>
																		<div class="col-sm-10">
																			<input type="password" class="form-control" id="signup_password" placeholder="Password"  autocomplete="off"/>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-sm-2">
																		</div>
																		<div class="col-sm-10">
																			<button type="button" id="signup" class="btn btn-primary btn-md">
																				Submit</button>
																				<button type="button" data-dismiss="modal" class="  btn btn-default btn-md">
																					Cancel</button>
																					<a href="#myModal" data-dismiss="modal" data-toggle="modal"><p >Already have account</p></a>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
																<div id="OR" class="hidden-xs">
																	OR</div>
																</div>
																<div class="col-md-4">
																	<div class="row text-center sign-with">
																		<div class="col-md-12">
																			<h3>
																				Sign in with</h3>
																			</div>
																			<div class="col-md-12">
																				<div class="btn-group btn-md btn-group-justified">
																					<a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
																					Google</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- End SignUp Modal -->


												<!-- Script for Horizontal Scrolling effect -->

												<script>window.jQuery || document.write('<script src="js/hscroll_js/jquery-1.11.0.min.js"><\/script>')</script>
												<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
												<!-- plugin script -->
												<script src="js/hscroll_js/jquery.mThumbnailScroller.js"></script>

												<script>
												(function($){
													$(window).load(function(){

														$("#content-1").mThumbnailScroller({
															type:"click-80",
															theme:"buttons-out"
														});

													});
												})(jQuery);
												
												(function($){
													$(window).load(function(){

														$("#content-2").mThumbnailScroller({
															type:"click-80",
															theme:"buttons-out"
														});

													});
												})(jQuery);
												</script>

												<script>
												(function($){
													$(window).load(function(){

														$("#content-3").mThumbnailScroller({
															type:"click-80",
															theme:"buttons-out"
														});

													});
												})(jQuery);
												</script>


										
                                