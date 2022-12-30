<?php
include 'connect.php';
$a=$_POST['username'];
$b=$_POST['place'];
$c=$_POST['rate'];
$d=$_POST['days'];
$query="insert into bookings(username,place,rate,days)values('$a','$b','$c','$d')";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Booking success');window.location.replace('home.php');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('Booking failed');window.location.replace('home.php');</script>
    <?php



}
?>


 