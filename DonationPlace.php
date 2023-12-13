<?php

 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['userName']);
  	header("location: php/login.php");
  }


    ?>
    <?php include('insert_com.php') ?>
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
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.php">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                 </li>
                                  <li class="nav-item active">
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
                     <h2>Donation Places</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
          <div class="col-md-7">
                        <div class="news_text" style = "margin-left: 5px; width: 100%">
                        <br>
                          <h3> 1.	Yayasan Food Bank Malaysia <span style="margin-left: 300px; "></span> </h3>
                        </div>
                     </div>
         <div class="news_img">
         <figure><img src="images/logo10.jpg" style = "margin-left: 15px; width: 400px; height:300px "></figure >
                        </div>
                        </div>
                     <div class="col-md-7">
                        <br>
                         <div class="news_text" style = "margin-left: 290px; width: 100%">
                           <p align="justify">YAYASAN FOOD BANK MALAYSIA (YFBM) is a charitable organisation governed by a Board of Trustees pursuant to the Trust Deed dated 22 December 2018 registered under Section 2 of the Trustee Act 1952. The foundation will be the catalyst for the effort to reduce food waste while addressing the issue of increasing cost of living, especially the poor or the B40</p>
                           <p><b>Contact:</b> +603-8736 0117 (Monday – Friday except public holidays, 9 a.m. – 6 p.m.)</p>
                           <p><a href="mailto: info@yfbm.org"> <b>Email:</b> info@yfbm.org</a></p>
                           <p align="justify"> <b>Address:</b> No.8, Jalan BA 4/1, Kawasan Perindustrian Bukit Angkat 4, 43000, Kajang, Selangor</p>
                           <p><a href="https://www.foodbankmalaysia.org/"> <b>Link Websites:</b> www.foodbankmalaysia.org</a></p>
                     </div>
                <br>
            </div>
         <div class="container">
          <div class="col-md-7">
                        <div class="news_text" style = "margin-left: 5px; width: 100%">
                        <br>
                          <h3> 2.	Food Aid Foudation<span style="margin-left: 300px; "></span> </h3>
                        </div>
                     </div>
         <div class="news_img">
         <figure><img src="images/logo12.jpg" style = "margin-left: 15px; width: 400px; height:300px "></figure >
                        </div>
                        </div>
                     <div class="col-md-7">
                        <br>
                         <div class="news_text" style = "margin-left: 290px; width: 100%">
                           <p align="justify">Food Aid Foundation as a food bank in Malaysia is a non-profit governmental organization (NGO) incorporated on 2013 that is where manufacturers, distributors, wholesaler, retailers, companies or people can donate their unused or unwanted foods which will then be collected and distributed to charitable/welfare homes, volunteer welfare organisation, refugees community, poor families, destitute and soup kitchen.</p>
                           <p align="justify"><b>Contact No:</b> +603 9226 5500</p>
                           <p><a href="mailto: info@foodaidfoundation.org"> <b>Email:</b> info@foodaidfoundation.org</a></p>
                           <p align="justify"> <b>Address:</b> No. 9 Jalan 7/118B, Desa Tun Razak, Cheras, ​56000 Kuala Lumpur, Malaysia </p>
                           <p><a href="https://foodaidfoundation.org/"> <b>Link Websites:</b> foododfoundation.org</a></p>
                     </div>
                <br>
            </div>
             <div class="container">
          <div class="col-md-7">
                        <div class="news_text" style = "margin-left: 5px; width: 100%">
                        <br>
                          <h3> 3.	Muhibbah FoodBank Malaysia <span style="margin-left: 300px; "></span> </h3>
                        </div>
                     </div>
         <div class="news_img">
         <figure><img src="images/logo13.jpg" style = "margin-left: 15px; width: 400px; height:300px "></figure >
                        </div>
                        </div>
                     <div class="col-md-7">
                        <br>
                         <div class="news_text" style = "margin-left: 290px; width: 100%">
                           <p align="justify">Since 1988, A One Foods & Beverages Sdn Bhd has been specialized in manufacturing and distribution of high-quality beverages such as natural fruit juices with pulp, ready to drink products and concentrated drinks. Besides of own manufacturing beverage brand, imported Thai food ingredients products and snack are also being introduced in the product line.</p>
                           <p><b>Contact:</b> +6013-933 1933 </p>
                           <p><a href="mailto: muhibbahfoodbank@gmail.com"> <b>Email:</b> muhibbahfoodbank@gmail.com</a></p>
                           <p align="justify"> <b>Address:</b> 29-40, Jln Bukit Belian 3, 71750 Mantin, Negeri Sembilan</p>
                           <p><a href="https://www.facebook.com/Muhibbahfoodbank/about/?ref=page_internal"> <b>Link Websites:</b> Muhibbahfoodbank</a></p>
                     </div>
                <br>
            </div>
     <!--  footer -->
     <footer>
         <div class="footer">
         	   <h1 style = "color:white; margin-left: -1000px"> Leave A Comment <h1>
          <div class="col-md-10 offset-md-1">
                     <form id="request" class="main_form" style="background-color: #ffffff" action="insert_com.php" method="post"><br>
                        <?php include('errors.php'); ?>
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <input class="contactus" placeholder="Email" type="type" name="email">
                           </div>
                           <div class="col-md-6 col-sm-6">
                                 <label type="label" name="titlelbl"><h4>Title : Donation Places</h4></label>
                                 <input class="contactus" type="hidden" name="title" value="Title : Donation Places">
                              </div>

                           <div class="col-md-12">
                              <input class="contactusmess" placeholder="Message" type="type" Message="msg" name="msg" >
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn" name="insert_com">Send</button>
                           </div>
                        </div>
                     <br></form>
                <br><br></div>
         </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. Design by E-Food Help Team</a></p>
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