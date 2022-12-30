<?php
session_start();
$username=$_SESSION['logged'];
?>

<div class="container">
 
<h2>list my bookings </h2>
 
<table border="2">
 
 
 <tr>
 
 <td> Username</td>
 
 <td> Place</td>
 
 <td> Rate</td>
 

 
 <td> Date</td>
 
 <td> Status</td>
 
 <td> Cancel</td>
 
 
</tr>
 

 
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
 
 <tr>
 
 <td><?php echo $a;?></td>
 
 <td><?php echo $b;?></td>
 
 <td><?php echo $c;?></td>
 
 <td><?php echo $d;?></td>
 
 <td><?php echo $e;?></td>
 
 <td><a href="cancelprocess.php?id=<?php echo $id;?>">Cancel</a></td>
 
 </tr>
 
 
<?php
 
 
}
 
 
?>
 
 
</table>
 
 
</div>
 