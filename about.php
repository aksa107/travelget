<?php
session_start();
$username=$_SESSION['logged'];
?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->


      <?php include 'usernavbar.php';?>

      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">The largest travel database in Kerala, Travel Jet, has an amazing selection of unexplored travel locations. It is a travel community that was created by travellers for backpackers. The members of our community produce and edit all of the material. In order to provide customers more options, Travel Jet also provides a platform for hotels, transportation, travel packages, payment and route information where they may rent out their space. The Travel Jet seeks to connect travellers all around the world with a travel insurance tool. Join us as we explore the mysterious.</p>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
             <!-- client section start -->
             <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Meet the Team</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Hi, my name is Fayaz i am 20 years old college student I am an experienced traveler who enjoys visiting new places and learning about new cultures. I am a good planner and enjoy researching my travel destinations in advance. I am also a flexible traveler who is open to new experiences and willing to try new things.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div ><img style="border-radius: 110px;" src="images/fayas.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                              <div></div> <h4 class="client_name">Fayas</h4>
                                 <p class="customer_text">Founder</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Hello, my name is Aksa, and I'm  20-year-old college student who loves to travel and discover new places and cultures. I like to explore my travel places in advance because I am an excellent planner. I am a flexible traveller who enjoys trying new things and is open to new experiences.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img  style="border-radius: 110px;" src="images/aksa.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Aksa</h4>
                                 <p class="customer_text">Co-Founder</Co-Founder></p>
                              </div>
                           </div>
                        </div>
                     </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
 <!-- footer section start -->
 <div class="footer_section layout_padding">
         <div class="container">
            <div class="location_main">
               <div class="call_text"><img src="images/call-icon.png"></div>
               <div class="call_text"><a href="#">Call 9745158479</a></div>
               <div class="call_text"><img src="images/mail-icon.png"></div>
               <div class="call_text"><a href="#">FayazFaizal007@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="https://www.instagram.com/fayazz.7/"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by  <a href="https://www.instagram.com/fayazz.7/">Fayaz</a><a href="https://www.instagram.com/deserve_better_107/"> Aksa</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>