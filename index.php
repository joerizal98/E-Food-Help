<?php
session_start();
 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['userName']);
    unset($_SESSION['adminID']);
  	header("location: php/login.php");
  }
   if (isset($_GET['logoutadmin'])) {
  	session_destroy();
  	unset($_SESSION['adminID']);
    unset($_SESSION['userName']);
  	header("location: php/login.php");
  }

    ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>E-food Help</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="icon" href="Image/E-FOOD HELP-logos.jpeg">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/img.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/bloading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_top d_none1">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <ul class="conta_icon">
                            <li><a href="https://wa.link/xgf56f"><img src="images/call.png" alt="#"/>Contact Us: +6012-9220162</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li> <a href="https://www.facebook.com/yayasanfoodbankmalaysia/"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="https://twitter.com/foodbankmy"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="https://my.linkedin.com/company/yayasan-food-bank-malaysia"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="https://www.instagram.com/foodbankmalaysia/"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                    	<?php

						    if(isset($_SESSION['adminID']))
						    {
						    	echo
						        ' <div class="col-md-4">
                        <ul class="right_icon d_none1">
                        <a href="php/adminpanel/adminpmain.php" class="order">Admin Panel</a>
                          <a href="index.php?logoutadmin=1" class="order">Logout</a>

                        </ul>
                     </div>';


						    }
						    else
						    {
						        echo
						        ' <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <a href="php/adminlogin.php" class="order">Admin Login</a>
                        </ul>
                     </div>';
						    }

						?>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                           <li><a href = "mailto: foodhelp2022@gmail.com"><img src="images/email.png"/>foodhelp2022@gmail.com</a></li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="#"><img src="images/logo3.png" alt="#" style="margin-left: 130px" /></a>
                     </div>
                     	<?php

						    if(isset($_SESSION['userName']))
						    {
						    	echo
						        ' <div class="col-md-4">
                        <ul class="right_icon d_none1">
                        <a href="index.php?logout=1" class="order">Logout</a>
                        </ul>
                     </div>';


						    }
						    else
						    {
						        echo
						        ' <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <a href="php/login.php" class="order">Login</a>
                            <a href="php/register.php" class="order">Register</a>
                        </ul>
                     </div>';
						    }

						?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="foodresources.php">Resources</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.php">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                 </li>
								 <li class="nav-item">
                                    <a class="nav-link" href="donate.php" style="background-color: royalblue;">Donate &#10083;</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <!--<div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
       <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> E-FOOD HELP</span> <br>Together,</h1>
                     <p>We re Strong </p>
                     <a class="read_more" href="php/register.php">Sign up Now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                      <!-- Slideshow container -->
                      <div class="slideshow-container" style="border: 2px solid #000000;">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                           <div class="numbertext">1 / 4</div>
                           <img src="Image/farm1.jpg" style="width:100%">
                           <div class="text">Fresh vegetables pick up from farmer</div>
                        </div>
                        <div class="mySlides fade">
                           <div class="numbertext">2 / 4</div>
                           <img src="Image/supermarket1.jpg" style="width:100%">
                           <div class="text">Fresh and Healthy Vegetables</div>
                        </div>
                        <div class="mySlides fade">
                           <div class="numbertext">3 / 4</div>
                           <img src="Image/foodwaqaf1.jpg" style="width:100%">
                           <div class="text">Food waqaf or Food Bank</div>
                        </div>
                        <div class="mySlides fade">
                           <div class="numbertext">4 / 4</div>
                           <img src="Image/foodbartertrade.jpg" style="width:100%">
                           <div class="text">Trade food with food</div>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                  </div><br>
                  <div style="text-align:center">
                     <span class="dot" onclick="currentSlide(1)"></span>
                     <span class="dot" onclick="currentSlide(2)"></span>
                     <span class="dot" onclick="currentSlide(3)"></span>
                     <span class="dot" onclick="currentSlide(4)"></span>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/into.jpg"></i>
                  </div>
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/into1.jpg"></i><br><br>
                     <i><img src="images/into2.jpg"></i>
                  </div>
                   <div class="six_probpx bluedark_bg">

               </div>
            </div>
      </div>
      <!-- end six_box section -->
      <!-- project section -->
      <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Who Are we</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="product_main">
               <section>
                  <div class="main-topic">
                  <div class="left-text">
                     <p>
                        <h2>We gather all food industries here from the food resources such as farmer.
                      Where it the resource of all food industries and here the product is in good quality
                   We also gather all supermarket to make it easy for you to search and to contact.
                Futhermore, we also gather all volunteer organization where all welfare activities their do it.
                        Such as food waqaf or food bank and also food trade where you can trade food with food.</h2>
                     </p>
                     </div>
                     <div class="left-picture">
                         <img src="images/all.jpg" >
                     </div>
                  <div class="clear"></div>
                  <div>
                  </div>
               </div>
               </section>

               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->
      <!-- fashion section -->

      <!-- end fashion section -->

      <!-- three_box section -->
            <body>
			<br>
			<br>
			<video controls style="margin-left: 50px; border: 5px solid black">
			<source src="What is a Food Bank .mp4" type="video/mp4" width="1100" height="400">
			Fallback Text
			</video>
			</br>
			</br>
			</body>

      <!-- end three_box section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. Design by E-Food Help Team</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/img.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

