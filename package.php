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
      <title>Travel Jet</title>
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
      <link rel="stylesheet" href="css/packagestyle.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   
   
      <<style>
    
img {
    max-width: 100%;
    height: 150px !important;
      }
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></aF></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="profile.php">Profile</a>
                        </li>
                        </li> <li class="nav-item">
                        <a class="nav-link " href="logout.html">Logout</a>
                        </li>

                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="home.php"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="home.php">Home</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="explore.php">Explore</a></li>
                     <li><a href="userbookings.php">My Bookings</a></li>
                     <li><a href="contact.php">Contact us</a></li>
                     <li><a href="profile.php">Profile</a></li>
                     <li><a href="logout.php">Logout</a></li>


                     <!-- <li><a href="login.html">Login</a></li> -->

                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
          
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                     <h3 class="banner_taital"><?php echo 'welcome '.$username;?></h3>
                        <p class="banner_text">Discover the traveller within you.Kerala's largest database with unique package
                           Book online and secure your travel plan</p>
                        <div class="read_bt"><a href="packages.html">BOOK NOW!</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">BOOK NOW!</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <?php
            include 'connect.php';
            $query="select * from packages";
            $res=mysqli_query($link,$query);
            ?>

            <br>
            <br>
            <center>

            <div class="container p-3">
  <h2>Packages </h2>
  <ul class="responsive-table">
    <li class="table-header">
       <div class="col col-3">Image</div>
      <div class="col col-1">Package Name</div>
      <div class="col col-2">Description</div>
      <div class="col col-1">Rate</div>
      <div class="col col-2">Details</div>
      <div class="col col-1">Action</div>
      <div class="col col-2"></div>
    </li>
    <?php
                    while($row=mysqli_fetch_array($res))
                    {
                        
                        $name=$row['pname'];
                        $des=$row['pdes'];
                        $rate=$row['prate'];
                        $image=$row['image'];
                        $details=$row['pdate'];
                        $pdf=$row['pseat'];
                        $path="uploads/".$image;
                        $pdfpath="uploads/pdf/".$pdf;
                        
                        
                    
                    ?>
    <li class="table-row p-3">
       <div class="col col-4" data-label="Payment Status"><img src="<?php echo $path;?>" height=400px width="300px"></div>
      <div class="col col-1" data-label="Job Id"><?php echo $name;?></div>
      <div class="col col-2" data-label="Customer Name"><?php echo $des;?></div>
      <div class="col col-1" data-label="Amount"><?php echo $rate ?></div>
      <div class="col col-2" data-label="Payment Status"><?php echo $details ?></div>
      <div class="col col-1" data-label="Payment Status"><a href="<?php echo$pdfpath ?>"> View Details</div></a>
      <div class="col col-2" data-label="Payment Status"> <button class="btn btn-info">Book Now</button> </div>
    </li>
    <?php

}

?>
  </ul>
</div>

   </center>