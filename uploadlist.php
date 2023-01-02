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
   
   
      <style>
    h2
    {
      position: static;
    }
img {
    width:150px !important;
    height: 150px !important;
      }
      </style>
   </head>
   <body>

      <!-- header section start -->
  <?php include 'adminnavbar.php';?>
      <?php
            include 'connect.php';
            $query="select * from packages";
            $res=mysqli_query($link,$query);
            ?>

            <br>
            <br>
            <center>

            <div class="container p-3">
               <div>

                  <h2  class="mb-4 mt-5 text-white">Packages </h2>
               </div>
  <ul class="responsive-table">
    <li class="table-header">
       <div class="col col-2">Image</div>
      <div class="col col-1">Package Name</div>
      <div class="col col-2">Description</div>
      <div class="col col-1">Ecnomy Rate</div>
      <div class="col col-1">Luxury Rate</div>
      <div class="col col-2">Details</div>
      <div class="col col-1">Action</div>
      <div class="col col-2"></div>
    </li>
    <?php
                    while($row=mysqli_fetch_array($res))
                    {
                        $id=$row['pid'];
                        $name=$row['pname'];
                        $des=$row['pdes'];
                        $rate=$row['prate'];
                        $lux=$row['pluxury'];
                        $image=$row['image'];
                        $details=$row['pdate'];
                        $pdf=$row['pseat'];
                        $path="uploads/".$image;
                        $pdfpath="uploads/pdf/".$pdf;
                        
                        
                    
                    ?>
    <li class="table-row p-3">
       <div class="col col-2" data-label="Payment Status"><img src="<?php echo $path;?>" height=400px width="300px"></div>
      <div class="col col-1" data-label="Job Id"><?php echo $name;?></div>
      <div class="col col-2" data-label="Customer Name"><?php echo $des;?></div>
      <div class="col col-1" data-label="Amount"><?php echo $rate ?></div>
      <div class="col col-1" data-label="Amount"><?php echo $lux ?></div>
      <div class="col col-2" data-label="Payment Status"><?php echo $details ?></div>
      <div class="col col-1" data-label="Payment Status"><a href="imgdeleteprocess.php?name=<?php echo $name;?>"> Delete</div></a>
      <div class="col col-2" data-label="Payment Status"><a href="packedit.php?name=<?php echo $name;?>&&id=<?php echo $id;?>" > <button class="btn btn-info">Edit</button></a>
    <?php

}

?>
  </ul>
</div>

   </center>

 
</div>
 