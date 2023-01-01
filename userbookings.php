

<?php
session_start();
$username=$_SESSION['logged'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/packagestyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<?php include 'usernavbar.php';?>
<div class="container">
 
 <h2 class="mb-4 mt-5">list my bookings </h2>
 <ul class="responsive-table">
     <li class="table-header">
        <div class="col col-2">Username</div>
       <div class="col col-2">Place</div>
       <div class="col col-2">Rate</div>
       <div class="col col-2">Date</div>
       <div class="col col-2">Status</div>
       <div class="col col-2">Action</div>
     </li>
 
 
 
  
 
  
 <?php
  
 include 'connect.php';
  
 $query="select * from bookings where username='$username'";
  
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
 <div class="col col-2" name="Amount"><?php echo $c ?></div>
 <div class="col col-2" name="details"><?php echo $d ?></div>
 <div class="col col-2" name="status"> <?php echo $e ?></div>
 <div class="col col-2" name="cancel"><button class="btn btn-info"><a href="cancelprocess.php?id=<?php echo $id;?>" class="text-white ">Cancel</a></button></div>
 </li>
 
 <?php }?>
  
  
 </table>
  
  
 </div>
  
</body>
</html>