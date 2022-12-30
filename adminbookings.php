<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PENDING REQUEST</title>
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
 
 <h2>list my bookings </h2>
  
 <table border="2">
  
  
  <tr>
  
  <td> Username</td>
  
  <td> Place</td>
  
  <td> Rate</td>
  
 
  
  <td> Date</td>
  
  <td> Status</td>
  
  <td> Approve</td>
   
  <td> Reject</td>
  
 </tr>
  
 
  
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
  
  <tr>
  
  <td><?php echo $a;?></td>
  
  <td><?php echo $b;?></td>
  
  <td><?php echo $c;?></td>
  
  <td><?php echo $d;?></td>
  
  <td><?php echo $e;?></td>
  
  <td><a href="approveprocess.php?id=<?php echo $id;?>">Approve</a></td>
  
  
  <td><a href="cancelprocess.php?id=<?php echo $id;?>">Reject</a></td>
  
  
  
 
  
 </tr>
  
  
 <?php
  
  
 }
  
  
 ?>
  
  
 </table>
  
  
 </div>
  
</body>
</html>