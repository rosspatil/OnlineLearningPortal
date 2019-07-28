
<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Course</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/responsive_category.css">
    <link rel="stylesheet" type="text/css" href="css/creator-style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/course-description.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <style type="text/css">
   
   

.footer{
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) );
}


.see-all{
    padding: 15px;
    width: 150px;
    margin-right: 30px;
    margin-top: 20px;
    background-color: #3498db;
    color: #fff;
}


.sidebar{
    width: 250px;
    height: auto;
    left:40px;
    top:120px;
    position: fixed;
    background-color: #f7f9fc;
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



.sidebar hr{
    padding: 0px;
    margin: 0px;
}

.menu-seprator{
  height:1px;
  border:none;
  background-color:#c4c9d1;
}
.row{
    margin-top: 20px;
}
.display-card{
    margin-top: 10px;
}
</style>

</head>
<body>

   <?php  include 'navigation.php' ?>

    <!-- Header background-->
    <div class="container" style="font-family: Open Sans,sans-serif;">
        <div class="col-sm-1 col-md-2 w3-hide-small w3-hide-medium" >
            <div class="sidebar w3-card-2 w3-light-grey " >
                <ul class="sidebar-menu">
                    <a  href="#data-science" li><li class="sidebar-menu-item " >Data Science</li></a>
                    <hr class="menu-seprator">
                    <a href="#big-data"><li class="sidebar-menu-item">Big Data</li></a>
                    <hr class="menu-seprator">
                    <a href="#robotics"><li class="sidebar-menu-item">Robotics</li></a>
                    <hr class="menu-seprator">
                    
                </ul>
            </div>
        </div>


        <div class="col-sm-11 col-md-10 " >
            <div  id="data-science">
                <p class="course-heading">Data Science</p>
                <div class="course-card11">
                    <div class="row">
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                    </div>

                    <div class="row">
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>

                    </div>
                    <div class="w3-center"><button class="btn see-all">See all</button></div>
                </div>
            </div>
            <div class="w3-padding-24" id="big-data">
                <p class="course-heading">Big Data</p>
                <div class="course-card11">
                    <div class="row">
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                        <a href="course.php?q=data+science"><div class="col-sm-3 col-md-3">
                            <div class="w3-border display-card w3-light-grey">
                                <img src="images/data-science.png" height="200px" width="200;">
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
                        </div></a>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                    </div>
                    <div class="w3-center"><button class="btn see-all">See all</button></div>
                </div>
            </div>
            <div class="w3-padding-24 robotics" id="robotics">
                <p class="course-heading">Robotics</p>
                <div class="course-card11">
                    <div class="row">
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                        <div class="col-sm-3">
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
                        </div>
                    </div>
                    <div class="w3-center"><button class="btn see-all">See all</button></div>
                </div>
            </div>

            
        </div>    
    </div>

     <?php include 'footer.php'?>


       
        <script type="text/javascript">
             var offset = $(".sidebar").offset();
             var offsetFoot = $(".robotics").offset();
            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                if(scroll< offsetFoot.top+500){
                   $('.sidebar').css('position', 'fixed');
                    $('.sidebar').css('width', '250px');
                    $('.sidebar').css('height', 'auto');
                    $('.sidebar').css('left' ,'40px');
                    $('.sidebar').css('top' ,'120px');
                    $('.sidebar').css('position', 'fixed');
                    $('.sidebar').css('background-color', '#f7f9fc');
                }else {
                   $('.sidebar').css('top' , offsetFoot.top+500-scroll);
                }



            });


        
        </script>    
    </body>
    </html>
