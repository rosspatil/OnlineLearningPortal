

<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="http://vjs.zencdn.net/5.19/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/ie8/1.1/videojs-ie8.min.js"></script>
  <script src="http://vjs.zencdn.net/5.19/video.js"></script>
<style type="text/css">
	#wrapper {
  padding-left: 250px;
  transition: all 0.4s ease 0s;
}
body{

  background: #000;
}
#sidebar-wrapper {
  margin-left: -250px;
  left: 250px;
  width: 250px;
  background: #000;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
  transition: all 0.4s ease 0s;
}
a{
 text-decoration: none !important;
}
#wrapper.active {
  padding-left: 0;
}

#wrapper.active #sidebar-wrapper {
  left: 0;
}

#page-content-wrapper {
  width: 100%;
  transition: all 0.4s ease 0s;
  margin-top: 30px;

}

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.sidebar-nav li {
  
  
}

.sidebar-nav  a {
  color: #999999;
  display: block;
  text-decoration: none;
  margin-top: 5px;
}


.sidebar-nav  a:hover,
.sidebar-nav .active {
  color: #fff;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
  margin-top: 5px;
}

.sidebar-nav  a:active,
.sidebar-nav  a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  margin-bottom: 10px;
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9) );
  margin-bottom: 10px;
}

#menu-toggle {
    text-decoration: none;
    float: left;
    color: #fff;
    padding-right: 15px;
}

@media (max-width:767px) {

#wrapper {
  padding-left: 0;
}

#sidebar-wrapper {
  left: 0;
}

#wrapper.active {
  position: relative;
  left: 250px;
}

#wrapper.active #sidebar-wrapper {
  left: 250px;
  width: 250px;
  transition: all 0.4s ease 0s;
}

#menu-toggle {
  display: inline-block;
}

}
.video{
  width: 100%;
  height: auto;
  background-color: #000;
}
.example_video_1{
  width: 100%;
  height: auto;
}
.helper{
  width:100%;
  position:absolute; 
  z-index:2;
  top:10%;
  margin-left:7%;
  opacity: 0.5;
  }

  .helper:hover{
    opacity: 1;
  }
.vjs-default-skin .vjs-fullscreen-control {display: none; }

.playlist{
   height: 60px;
   width: 90%;
}
.playlist-cover{
  width: 50px;
  height: 60px;
}
</style>

</head>
<body>
<div id="wrapper">
    
    
    <div id="sidebar-wrapper">
        <nav id="spy">
            <ul class="sidebar-nav nav">
                
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                 <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
                <a href="main.php"><li>
                    
                        <div class="playlist">
                            <img class=" w3-left playlist-cover" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">
                               <div class="w3-right">
                                <p >Video-1</p>                               
                                <p >Status: Complete</p>
                               <div  
                        </div>
                    
                </li></a>
            </ul>
        </nav>
    </div>

    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container video">
              <div class="helper">
                  
                     <a title='Course Content' id="menu-toggle" href="#" style="font-size:30px;">
                          <i class="glyphicon glyphicon-align-justify btn-menu toggle w3-left" ></i>
                    </a>
              
                   
                       <a title='Go to Dashboard' href="course.php"  style="font-size:30px;color:#fff;margin-left:55%" >Dashboard</a>
                  
              </div>
                 <video id="example_video_1" class="video-js vjs-big-play-centered vjs-default-skin vjs-nofull" controls preload="none" 
                      data-setup='{ "html5" : { "nativeTextTracks" : false } ,"fluid": true}' 
                      poster="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png">

                    <source src="video.mp4" type="video/mp4">
                    <source src="//d2zihajmogu5jn.cloudfront.net/elephantsdream/ed_hd.ogg" type="video/ogg">

                    <track kind="captions" src="caption/captions.en.vtt" srclang="en" label="English" default></track><!-- Tracks need an ending tag thanks to IE9 -->
                    <track kind="captions" src="caption/captions.sv.vtt" srclang="sv" label="Swedish"></track>
                    <track kind="captions" src="caption/captions.ru.vtt" srclang="ru" label="Russian"></track>
                    <track kind="captions" src="caption/captions.ja.vtt" srclang="ja" label="Japanese"></track>
                    <track kind="captions" src="caption/captions.ar.vtt" srclang="ar" label="Arabic"></track>



                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                  </video>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	    
	/*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });


    
    var videoPlayer=videojs("example_video_1");
    videoPlayer.controlBar.addChild('button', {
    text: "Back",
    tabIndex: 3
    }).addClass("button-next");
    $(".button-next").html("<a href='#' title='Next' target='_blank' style='color:#fff'><i class='glyphicon glyphicon-forward'></i></a>");

</script>
</body>
</html>