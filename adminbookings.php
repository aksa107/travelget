<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PENDING REQUEST</title>
    
    <link rel="stylesheet" href="css/packagestyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<style>
html{
    width:100%;
    height:100%;
}    
body{
    width:100%;
    height:100;
    style>
    div.send{
    background-color: rgba(0,0,0,0.5);
    width: 50%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(red, green, blue, alpha);
    color:#ffff;
   
}
h2
{
    text-align: center;
    padding: 20px;
    font-family:sans-serif;
}
form#register{
    margin: 25px;
   

}
label
{
    font-family: sans-serif;
   
    font-size: 18px;
    font-style: initial;
    display: inline-block;
    width: 240px;
    color: aliceblue;

    <style>
    
body {
  background-image: url('foot.jpg');
}
</style>


<body>
    
<div class="container">
 
 <h2 class="mb-4 mt-5">Pending Request  </h2>
 <ul class="responsive-table">
     <li class="table-header">
        <div class="col col-2">Username</div>
       <div class="col col-2">Place</div>
       <div class="col col-1">Rate</div>
       <div class="col col-2">Date</div>
       <div class="col col-1">Status</div>
       <div class="col col-1">Approve</div>
       <div class="col col-1">Reject</div>
     </li>
 
 
 
  
 <?php
  
 include 'connect.php';
  $status="pending";
 $query="select * from bookings where status='$status'";
  
 $res=mysqli_query($link,$query);
  
 while($row=mysqli_fetch_array($res))
  
 {
  
  $id=$row['id'];
  $a=$row['username'];
  
  $b=$row['place'];
  
  $c=$row['rate'];
  
  $d=$row['days'];
  
  $e=$row['status'];
 
  
  ?>
 <li class="table-row p-3">
 <div class="col col-2" name=""><?php echo $a;?></div>
 <div class="col col-2" name="Customer Name"><?php echo $b;?></div>
 <div class="col col-1" name="Amount"><?php echo $c ?></div>
 <div class="col col-2" name="details"><?php echo $d ?></div>
 <div class="col col-1" name="status"> <?php echo $e ?></div>
 <div class="col col-1" name="cancel"><button class="btn btn-success"><a href="approveprocess.php?id=<?php echo $id;?>" class="text-white ">Approve</a></button></div>
 <div class="col col-1" name="cancel"><button class="btn btn-danger"><a href="cancelprocess.php?id=<?php echo $id;?>" class="text-white ">Reject</a></button></div>
 </li>
 
 <?php }?>
  

  
 </div>
  
</body>
</html>