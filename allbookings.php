



  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    <link rel="stylesheet" href="css/packagestyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
  <?php include 'adminnavbar.php';?>
<div class="container">
 
 <h2 class="mb-4 mt-5">All bookings </h2>
 <ul class="responsive-table">
 <li class="table-header">
         <div class="col col-2">Username</div>
        <div class="col col-2">Place</div>
        <div class="col col-2">Rate</div>
        <div class="col col-2">Date</div>
        <div class="col col-2">Status</div>
      </li>
  
  
   
 <?php
  
  include 'connect.php';
  $query="select *, packages.pid,packages.prate,packages.pluxury from bookings INNER JOIN packages ON bookings.pid=packages.pid ";
// echo $query;
   
  $res=mysqli_query($link,$query);
  
  while($row=mysqli_fetch_array($res))
  {
      
      $id=$row['id'];

   $a=$row['username'];
   
   $b=$row['package'];
   
   $mode=$row['mode'];
   $mode=="luxury"?$c=$row['pluxury']:$c=$row['prate'];
   
   $d=$row['date'];
   
   $e=$row['status'];
  
   
   ?>
 <li class="table-row p-3">
  <div class="col col-2" name=""><?php echo $a;?></div>
  <div class="col col-2" name="Customer Name"><?php echo $b;?></div>
  <div class="col col-2" name="Amount"><?php echo $c ?></div>
  <div class="col col-2" name="details"><?php echo $d ?></div>
  <div class="col col-2" name="status"> <?php echo $e ?></div>
  </li>
  <?php }?>
 
 <style>
     <body>
         background-image: url("bgimage.jpg")
     </body>
  
  
 
 
  
  
 </table>
  
  
 </div>
  
  </body>
  </html>