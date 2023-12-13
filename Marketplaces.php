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
                           <a href="php/login.php" class="order">Login</a>
                            <a href="php/register.php" class="order">Register</a>
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
                                 <li class="nav-item">
                                    <a class="nav-link" href="indexal.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item active">
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
                     <h2>Marketplaces</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
          <div class="col-md-7">
                        <div class="news_text" style = "margin-left: 5px; width: 100%">
                        <br>
                          <h3> 1.	Sea Fresh Frozen Seafood Sdn Bhd <span style="margin-left: 300px; "></span> </h3>
                        </div>
                     </div>
         <div class="news_img">
         <figure><img src="images/logo8.png" style = "margin-left: 15px; width: 400px; height:300px "></figure >
                        </div>
                        </div>
                     <div class="col-md-7">
                        <br>
                         <div class="news_text" style = "margin-left: 290px; width: 100%">
                           <p align="justify">Sea Fresh Frozen Seafood Sdn Bhd source a huge range of fresh and frozen seafood, frozen meats, processed foods as well as F&B related products from local and international market. It enables us to offer first class service to our customers - whatever the requirement. We are also the authorized distributor of international brands such as Marigold, Pacific West, Swiss Bear, Kelloggs, Aryzta/ Hiestand, etc.</p>
                           <p><a href="https://api.whatsapp.com/send?phone=60177032086&text=Enquiry%20from%20SEA%20Frozen%20Website"><b>Contact:</b> +60 17-703 2086 </p>
                           <p><a href="mailto: sales@seafrozenfood.com"> <b>Email:</b> sales@seafrozenfood.com</a></p>
                           <p align="justify"> <b>Address:</b> No. 9 Jalan Mutiara Emas 6/1A, Taman Mount Austin, 81100 Johor Bahru, Johor, Malaysia</p>
                           <p><a href="http://www.seafrozenfood.com/usr/page.aspx?pgid=2"> <b>Link Websites:</b> www.seafrozen.com</a></p>
                     </div>
                <br>
            </div>
         <div class="container">
          <div class="col-md-7">
                        <div class="news_text" style = "margin-left: 5px; width: 100%">
                        <br>
                          <h3> 2.	Zenxin Organic <span style="margin-left: 300px; "></span> </h3>
                        </div>
                     </div>
         <div class="news_img">
         <figure><img src="images/logo8.jpg" style = "margin-left: 15px; width: 400px; height:300px "></figure >
                        </div>
                        </div>
                     <div class="col-md-7">
                        <br>
                         <div class="news_text" style = "margin-left: 290px; width: 100%">
                           <p align="justify">ZENXIN started its agro-tourism business in 2009 and converted its biggest organic farm in Malaysia into ZENXIN Organic Park. Integrated with a farm mart and a casual styled restaurant Farm Table, this recreational farm for one and all is first and foremost, a working organic farm with organic aloe vera, papaya, mulberries, vegetables such as sweet potato leaf, choy sum, okra, herbs etc. </p>
                           <p align="justify"><b>Contact No:</b> +6012-7058199 or +6012-3708299</p>
                           <p><a href="mailto: ecom@zenxin.com.my"> <b>Email:</b> info@zenxin.com.my</a></p>
                           <p> <b>Open</b> 8:00 AM - 5:00 PM (Monday to Friday) and 8:00 AM - 1:00 PM (Saturday) </p>
                           <p align="justify"> <b>Address:</b> No.8, (PLO67) Jalan Teknologi 1, Kawasan Perindustrian Mengkibol, 86000 Kluang, Johor, Malaysia. (A-583957) </p>
                           <p><a href="https://zenxin.com.my/"> <b>Link Websites:</b> zenxin.com.my</a></p>
                     </div>
                <br>
            </div>
             <div class="container">
          <div class="col-md-7">
                        <div class="news_text" style = "margin-left: 5px; width: 100%">
                        <br>
                          <h3> 3.	A One Food & Beverage Sdn Bhd <span style="margin-left: 300px; "></span> </h3>
                        </div>
                     </div>
         <div class="news_img">
         <figure><img src="images/logo9.jpg" style = "margin-left: 15px; width: 400px; height:300px "></figure >
                        </div>
                        </div>
                     <div class="col-md-7">
                        <br>
                         <div class="news_text" style = "margin-left: 290px; width: 100%">
                           <p align="justify">Since 1988, A One Foods & Beverages Sdn Bhd has been specialized in manufacturing and distribution of high-quality beverages such as natural fruit juices with pulp, ready to drink products and concentrated drinks. Besides of own manufacturing beverage brand, imported Thai food ingredients products and snack are also being introduced in the product line.</p>
                           <p><b>Contact:</b> +6 03-9081 8078 </p>
                           <p><a href="mailto: info@aonebeverage.com"> <b>Email:</b>info@aonebeverage.com</a></p>
                           <p align="justify"> <b>Address:</b> No.6 & 8 Jalan Megah 23, Taman Megah Batu 9 ½, Cheras 43200 Selangor, Malaysia</p>
                           <p><a href="http://www.aonebeverage.com/web/"> <b>Link Websites:</b> www.aonebeverage.com</a></p>
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
                                 <label type="label" name="titlelbl"><h4>Title : MarketPlace</h4></label>
                                 <input class="contactus" type="hidden" name="title" value="Title : Marketplace">
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