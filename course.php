
<?php 

      session_start();
    if (isset($_GET['email']))
       {
            $_SESSION['email'] = $_GET['email'];
        }
?>
<!DOCTYPE html>
<head>
    <title>Course</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <style type="text/css">
    
    .rating-div .progress{
        margin-bottom: 0!important;
    }
    .rating-div .padding-left-none{
        padding: 5px 15px 0 0;

    }

    .rating-div .progress-bar{
        background: #3498db;
    }

    .rating-div{
        max-width: 100%;
        margin: 50px auto;
    }

    .rating-div  .glyphicon {
        color: #3498db;
    }

    .rating-div .rating-count {
        font-size: 48px;
    }

    .rating-div  .percent{
        color: blue;
    }

    .footer{
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) );
    }




    div#details{
        margin-left: 42px;
        margin-right: 20px;
    }

    div#details p{
        margin : 10px 0;
    }
    .sidebar{
        width: 250px;
        height: auto;
        left:40px;
        top:120px;
        position: fixed;
        background-color: #f7f9fc;
    }
    a{
       text-decoration: none !important;
   }
   .sidebar-menu{
    list-style-type: none;
    padding: 0px;
    margin: 0px;
}

.sidebar-menu-item{
    padding: 18px;
    font-size: 18px;
    font-weight: 500;
    background-color: #f7f9fc;
}

.sidebar-menu-item:hover{
    background-color: #fff;

}


.primary{
    background-color: #2073d4;
    border: 1px solid #2073d4;
}



.main hr,.sidebar hr{
    padding: 0px;
    margin: 0px;
}

.menu-seprator{
  height:1px;
  border:none;
  background-color:#c4c9d1;
}

</style>
</head>
<body>


 <?php include 'navigation.php' ?>
 <?php include 'enroll_course.php' ?>
 <div class=" md-search w3-hide-large" style="width:100%">
    <form action="search.php" method="post">                    
        <input type="text" class="search-md line" name='q' id='search' placeholder="Search"/>
        
        <button type="submit" >
            <i   class="material-icons " style="opacity:1;cursor:pointer">search</i>
        </button>
        
    </form>
</div>

<div class="w3-display-container" style="z-index:-2;position:absolute;">
    <div class="w3-display-middle" style="width: 80%;margin-left:10%;">
        <p class="w3-center w3-text-white course-banner-text " >Launch Your Career in Data Science</p>
        <p class="w3-center  w3-text-white course-banner-text-quote">A nine-course introduction to data science, developed and taught by leading professors.</p>
    </div>
</div>
<div class="container" style="font-family: Open Sans,sans-serif;">
    <div class="col-sm-1 col-md-2 w3-hide-small w3-hide-medium" >
        <div class="sidebar w3-card-2 w3-light-grey " >
            <ul class="sidebar-menu">
                <a  href="#courses" li><li class="sidebar-menu-item " >About The Course</li></a>
                <hr class="menu-seprator">
                <a href="#requirements"><li class="sidebar-menu-item">Requirements</li></a>
                <hr class="menu-seprator">
                <a href="#reviews"><li class="sidebar-menu-item">Students Feedback</li></a>
                <hr class="menu-seprator">
                <a href="#creators"><li class="sidebar-menu-item">Creators</li></a>
                <hr class="menu-seprator">
                <a href="#faq"><li class="sidebar-menu-item">FAQ</li></a>
                <hr class="menu-seprator">
                <li class="sidebar-menu-item  w3-center" style="opacity: 1.0;background-color:#75b267;border-width:10px;border-style:solid;border-color:#eff4fc;">
                    <p class="w3-xlarge ">Data Science Specialization</p>
                    <?php 

                          
                        if (isset($_SESSION['email']))
                           {
                               
                        ?>

                    <a class="w3-button w3-large primary w3-padding-large w3-center w3-text-white" href="main.php">Enroll now</a>
                    <?php }else{ ?>

                        <a class="w3-button w3-large primary w3-padding-large w3-center w3-text-white" href="#myModal"  data-toggle="modal">Enroll now</a>

                    <?php } ?>
                </li>        
                <hr class="menu-seprator">
            </ul>
        </div>
    </div>


    <div class="col-sm-11 col-md-10 main" >

     

        <div class="w3-padding-24" id="courses">
            <p class="course-heading" >Course</p>
            <hr>
            <div class="w3-padding-24 course-card11">                    
                <div class="card-heading11">
                    <h2>The Data Scientist’s Toolbox</h2>
                </div>  
                <div >
                    <p class="headline-text-1">Time Duration: </p>3 months<br>
                    <p class="headline-text-1">Commitment:</p>1-4 hours/week
                </div>
                <div>
                    <p class="headline-text-1">Created By:</p>
                    <img class="createdby" src="images/prygma.jpg">
                </div>
                <div>
                    <p class="headline-text-1">Industry Partners:</p>
                    <img class="industry" src="images/prygma.jpg">
                </div>

                <div class="description11" >
                    <p class="about-heading11">About the Course</p>
                    <span>In this course you will get an introduction to the main tools and ideas in the data scientist toolbox. The course gives an overview of the data, questions, and tools that data analysts and data scientists work with. There are two components to this course. The first is a conceptual introduction to the ideas behind turning data into actionable knowledge. The second is a practical introduction to the tools that will be used in the program like version control, markdown, git, GitHub, R, and RStudio.</span>
                </div>

                
                <p style="margin-top:10px;">
                    <span class="glyphicon glyphicon-chevron-right" id="control1"></span>
                    <a href="javascript:displayFunction(1)" id="details-link1">More details</a>
                </p>
                

                <!-- Week Div -->
                <div class="w3-padding-24" id="details1" style="display: none;">
                    <hr>
                    

                    <p class="w3-large">Week 1</p>
                    <p>During Week 1, you will learn about the goals and objectives of the Data Science Specialization and each of its components. You will also get an overview of the field as well as instructions on how to install R.</p>
                    <hr>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <hr>

                    
                    <p class="w3-large">Week 2</p>
                    <p>During Week 2, you'll learn about the goals and objectives of the Data Science Specialization and each of its components. You'll also get an overview of the field as well as instructions on how to install R.</p>
                    <hr>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <p><i class="glyphicon glyphicon-film"></i> Video · Specialization Motivation</p>
                    <!-- End week div-->
                </div>
            </div>
            
            <div >
            </div>
        </div>



        <div class="w3-padding-24" id="requirements">
            <p class="course-heading" >Requirements </p>
            <hr>
            <div class="w3-padding-24 course-card11">  
                To succeed in this program, you need to have significant experience with:
                <ul>
                    <li>Calculus and Linear Algebra</li>
                    <li>Statistics and Probability</li>
                    <li>Intermediate Python</li>
                    <li>Unix/Linux Command Line Basics</li>
                    <li>Basic Physics (Newtonian Mechanics)</li>
                    <li>Intermediate C++</li>
                    <li>programming for ROS</li>
                    <li>Machine Learning</li>
                </ul>
            </div>
        </div> 

        <div class="w3-padding-24 rating-div" id="reviews">
            <p class="course-heading" >Students Feedback</p>
            <hr>
            <div class="w3-padding-24 course-card11">  
                <p><span class="rating-count">4.7</span> Average Rating</p>

                <div class="row  center-block">  
                    <div class="col-sm-5 padding-left-none"> 
                        <div class="progress">             
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:72%"></div>
                        </div>
                    </div>    
                    <div class="col-sm-2 star-div">
                        <div id="stars" class="starrr" data-rating='5' disabled></div> 
                        <!--Star rating division set data rating for no of stars -->   
                    </div>
                    <div class="col-sm-2">
                       <span class="percent">72%</span>
                       <!--Percentage div -->
                   </div>    
               </div>
               <div class="row  center-block">
                <div class="col-sm-5 padding-left-none">   
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
                    </div>
                </div>
                <div class="col-sm-2 star-div ">
                    <div id="stars-1" class="starrr" data-rating='4' disabled></div>
                </div>
                <div class="col-sm-2 ">
                   <span class="percent">23%</span>
               </div>    
           </div>
           <div class="row  center-block">
            <div class="col-sm-5 padding-left-none">   
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:4%"></div>
                </div>
            </div>
            <div class="col-sm-2 star-div">
                <div id="stars-2" class="starrr" data-rating='3' disabled></div>
            </div>
            <div class="col-sm-2">
                <span class="percent">4%</span>
            </div>    
        </div>
        <div class="row  center-block">
            <div class="col-sm-5 padding-left-none">   
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:1%"></div>
                </div>
            </div>
            <div class="col-sm-2 star-div">
                <div id="stars-3" class="starrr" data-rating='2' disabled></div>
            </div>
            <div class="col-sm-2">
               <span class="percent">1%</span>
           </div>    
       </div>
       <div class="row  center-block">
        <div class="col-sm-5 padding-left-none">   
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
            </div>
        </div>
        <div class="col-sm-2 star-div">
            <div id="stars-4" class="starrr" data-rating='1' disabled></div>
        </div>
        <div class="col-sm-2">
           <span class="percent">0%</span>
       </div>    
   </div>

   <h3>Reviews</h3>
   <div class="reviews">
    <div class="review">
        <hr>
        <h4>Roshan Patil</h4>
        <div class="starrr" data-rating='5'></div>
        <p>I am pretty satisfied with this course ,from my experiance in learning front end in this course i will give it 5* ,very well explained and the amount of external tools and resourses use from other websites helped alot in understanding the class(like postman)
        </div>
        <div class="review">
            <hr>
            <h4>Roshan Patil</h4>
            <div class="starrr" data-rating='5'></div>
            <p>I am pretty satisfied with this course ,from my experiance in learning front end in this course i will give it 5* ,very well explained and the amount of external tools and resourses use from other websites helped alot in understanding the class(like postman)
            </div>
            <hr>
            <div class="review">
                <h4>Roshan Patil</h4>
                <div class="starrr" data-rating='5'></div>
                <p>I am pretty satisfied with this course ,from my experiance in learning front end in this course i will give it 5* ,very well explained and the amount of external tools and resourses use from other websites helped alot in understanding the class(like postman)
                </div>
                <center>
                    <button class=" btn-md btn-primary btn">See All</button>
                </center>
            </div>
            
            
        </div>
    </div> 
    
    <div class=" creator" id="creators">
        <p class="course-heading">Creators</p>
        <div class="course-card11">
            <div class="w3-padding w3-border creators-div">
                <p>Johns Hopkins University is recognized as a destination for excellent, ambitious scholars and a world leader in teaching and research. The mission of The Johns Hopkins University is to educate its students and cultivate their capacity for life-long learning, to foster independent and original research, and to bring the benefits of discovery to the world.</p>
                <p class="description-div">The mission of The Johns Hopkins University is to educate its students and cultivate their capacity for life-long learning, to foster independent and original research, and to bring the benefits of discovery to the world.</p>
            </div>

            <div class="container-fluid  w3-border creators-1-div w3-card">
                <div class="col-sm-2 col-md-2">
                    <img class="creator-image" src="images/data.jpg" >
                </div>
                <div class="col-sm-10 col-md-10">
                    <p class="creators-name">Roger D. Peng, PhD</p>
                    <p class="creators-info">Associate Professor, Biostatistics</p>     
                </div>
            </div>

            <div class="container-fluid  w3-border  creators-1-div w3-card">
                <div class="col-sm-2 col-md-2">
                 <img class="creator-image" src="images/data.jpg" >
             </div>
             <div class="col-sm-10 col-md-10">
                <p class="creators-name">Roger D. Peng, PhD</p>
                <p class="creators-info">Associate Professor, Biostatistics</p> 
            </div>
        </div>

        <div class="container-fluid  w3-border creators-1-div w3-card">
            <div class="col-sm-2 col-md-2">
                <img class="creator-image" src="images/data.jpg" >
            </div>
            <div class="col-sm-10 col-md-10">
                <p class="creators-name">Roger D. Peng, PhD</p>
                <p class="creators-info">Associate Professor, Biostatistics</p> 
            </div>
        </div>
    </div>
</div>
</div>    
</div>

<?php include 'footer.php'?>



<script type="text/javascript">
var offset = $(".sidebar").offset();
var offsetFoot = $(".creator").offset();
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll< offsetFoot.top+100){
     $('.sidebar').css('position', 'fixed');
     $('.sidebar').css('width', '250px');
     $('.sidebar').css('height', 'auto');
     $('.sidebar').css('left' ,'40px');
     $('.sidebar').css('top' ,'120px');
     $('.sidebar').css('position', 'fixed');
     $('.sidebar').css('background-color', '#f7f9fc');
 }else {
     $('.sidebar').css('top' , offsetFoot.top+100-scroll);
 }
 if(scroll>100){
    $('#enroll_course').css('display', 'block');
}else{
   $('#enroll_course').css('display', 'none');
}



});


function displayFunction(cnt) {

    var status;
    status = document.getElementById('details'.concat(cnt)).style.display;
    if(status == "none"){
        document.getElementById('details'.concat(cnt)).style.display = "block";
        status = "block";
        document.getElementById('details-link'.concat(cnt)).innerHTML = "Hide details";
        document.getElementById('control'.concat(cnt)).className = "glyphicon glyphicon-chevron-down";  
    }else if(status == "block"){
        document.getElementById('details'.concat(cnt)).style.display = "none";
        status = "none";
        document.getElementById('details-link'.concat(cnt)).innerHTML = "More details";
        document.getElementById('control'.concat(cnt)).className = "glyphicon glyphicon-chevron-right";
    }
}
</script>    
</body>
</html>
