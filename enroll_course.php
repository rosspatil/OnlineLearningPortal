
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

<nav class="navbar  navbar-default w3-hide-large w3-card-2 w3-white" id="enroll_course" role="navigation" style="z-index:10;display:none;top:0;position: fixed;transition:1s;">
		<div style="width:100%;height:25px;background-color:#3498db;color:#fff;font-size:18px;font-weight:500">
			<p class="w3-center">Offer: Save 80% on all courses. Limited Period!</p>
		</div>
	<div class="enroll_course">
        <button class="btn btn-md" style="width:100%;background-color:#75b267;">Enroll Now </button>
   </div>
</nav>  


	

<!-- Script for Horizontal Scrolling effect -->

<script>window.jQuery || document.write('<script src="js/hscroll_js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- plugin script -->
<script src="js/hscroll_js/jquery.mThumbnailScroller.js"></script>

												