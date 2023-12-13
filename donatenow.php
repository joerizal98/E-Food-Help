<?php

 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['userName']);
  	header("location: php/login.php");
  }


    ?>
<?php include('insert_donate.php') ?>
<!DOCTYPE html>
<html>
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
<body>
    <div class="blue_bg">

         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>DONATION DETAILS</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
        <div id="contact" class="contact">
         <div class="con_bg">
            <div class="container">
                  <div class="col-md-10 offset-md-1">
                     <form id="request" class="main_form" method="post" action="insert_donate.php">
                        <?php include('errors.php'); ?>
                    
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <label>Food Name</label>
                              <input class="contactus" placeholder="e.g Tomato" type="text" name="name" value="<?php echo $foodName; ?>"> 
                           </div>
                           <div class="col-md-6 col-sm-6">
                            <label>Quantity</label>
                              <input class="contactus" type="text" name="quantity" placeholder="e.g 100" value="<?php echo $quantity; ?>"> 
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <label>Food Category</label>
                              <label style="font-size: 14px;font-style: oblique;" >Code = SF = Seafood, CF = Canned Food, FF = Frozen Food, VG = Vegetables, FR = fruit, RE = Ready to eat, DW = Drink Water</label>
                              <input class="contactus" placeholder="SF/CF/FF/VG/FR/DW" type="type" name="foodCategory"  value="<?php echo $foodCategory; ?>">                           
                           </div>
                           <div class="col-md-12">
                              <label>Estimated Price/Unit</label>
                              <input class="contactus" type="text" name="foodPrice" placeholder="e.g. 80.50" value="<?php echo $foodPrice; ?>">
                           </div>
                           <div class="col-md-12">
                              <button type="submit" class="send_btn" name="insert_donate">Submit</button>
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button type="button" class="send_btn" name="cancel"><a href = "donate.php" style="color: white;"> Cancel</a></button>
                           </div>
                        </div>
                     </form><br>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <script>
            $(document).ready(function(){
            $(".buttonmore").click(function(){
                $(".col-md-6 col-sm-6").append("<div class="col-md-6 col-sm-6"><label>Food Name</label><input class="contactus" placeholder="e.g Tomato" type="type" name="name"></div><div class="col-md-6 col-sm-6"><label>Quantity</label><input class="contactus" placeholder="e.g 100" type="type" name="quantity"></div>");
             });
        </script>
</body>
</html>