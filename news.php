   <?php
session_start();
 if (isset($_GET['logout'])) {
  	session_destroy();
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
      <title>E-Food Help Website</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="icon" href="Image/E-FOOD HELP-logos.jpeg">
      <link rel="stylesheet" href="css/bootstrap.min.css">
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
   <body class="main-layout footer_to90 about_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                        <a class="logo" href="#"><img src="images/logo3.png" alt="#"/></a>
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
                           <a href="php/register.php" class="order">Login</a>
                            <a href="php/login.php" class="order">Register</a>
                        </ul>
                     </div>';
						    }

						?>
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
                                  <li class="nav-item ">
                                   <a class="nav-link" href="indexal.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="foodresources.php">Resources</a>
                                 </li>
                                 <li class="nav-item active">
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
                        <div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Latest News</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="container">
            <div class="row">
             <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img2.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <a href ="LatestNews2.php" target="_blank"><h3> Repair An Elderly Home </h3></a>
                           <span>31 May 2022</span>
                           <div class="date_like">
                              <a href ="LatestNews2.php" target="_blank"><span class="pad_le">Read More >></span></a>
                           </div>
                           <p>Assistance to repair and rebuild damaged houses and dilapidated houses is now offered to eligible applicants.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img3.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <a href ="LatestNews3.php" target="_blank"><h3> Mubadala Petroleum donates 800 food parcels to TLFP </h3></a>
                           <span>28 April 2022</span>
                           <div class="date_like">
                              <a href ="LatestNews3.php" target="_blank"><span class="pad_le">Read More >></span></a>
                           </div>
                           <p align="justify">Mubadala Petroleum, a renowned international oil and gas business with interests in Malaysia, has partnered with The Lost Food Project (TLFP) to provide 800 vital food boxes to hundreds of B40 (low-income) families in Batu, Kuala Lumpur.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img1.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <a href ="LatestNews1.php" target="_blank"><h3> Johor Rice Aid </h3></a>
                           <span>14 April 2022</span>
                           <div class="date_like">
                              <a href ="LatestNews1.php" target="_blank"><span class="pad_le">Read More >></span></a>
                           </div>
                           <p>Each Head of Household in Johor will receive 10kg of rice.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img4.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <a href ="LatestNews4.php" target="_blank"><h3> Ceva & local farmers donate 100,000 eggs to communities impacted by Covid-19 </h3></a>
                           <span>10 April 2022</span>
                           <div class="date_like">
                              <a href ="LatestNews4.php" target="_blank"><span class="pad_le">Read More >></span></a>
                           </div>
                           <p align="justify">Ceva Animal Health Malaysia and local poultry farmers CP Malaysia, Heap Soon Farming Sdn Bhd, Liang Kee Farming Sdn Bhd, Teo Seng Capital Berhad, and Zenxin Agriculture Sdn Bhd, donate 100,000 eggs to at least 56 charities and 7,500 B40 communities facing hunger, malnutrition, and food insecurity.</p>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
                <br>
            </div>
         </div>
     <!--  footer -->
     <footer>
         <div class="footer">
         <div class="container">
                <div class="row">
               <div class="col-md-3">
                     <div class="inror_box">
                        <h3>OBJECTIVE </h3>
                        <p align="justify">To build and improve a surplus food management system, collaborate with non-governmental organisations (NGOs) and related industrial partners.</p>
                     </div>
                  </div>
               <div class="col-md-3">
                     <div class="inror_box" style="margin-left: 180px; width: 100%">
                        <h3>MISSION </h3>
                        <p>E-Food Help aims to achieve "Zero Hunger" and "Zero Waste" in Malaysia by ensuring a halal and safe food supply.</p>
                     </div>
                  </div>
                   <div class="col-md-3">
                     <div class="inror_box" style="margin-left: 300px; width: 100%">
                        <h3 >VISION </h3>
                        <p>Become the Food Industry's Leader In the future, help domestically and internationally to help a large number of individuals.</p>
                     </div>
                  </div>
               </div>
            </div>
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
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>