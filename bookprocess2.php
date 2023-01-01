<?php
include 'connect.php';
$a=$_POST['package'];
$b=$_POST['phone_number'];
$c=$_POST['address'];
$d=$_POST['date'];
$e=$_POST['email'];
$f=$_POST['Name'];
$g=$_POST['additional'];
$women=$_POST['women'];
$men=$_POST['men'];
$radioVal = $_POST["radio"];

if($radioVal == "ecnomy")
{
$mode="ecnomy";
}
else if ($radioVal == "luxury")
{
    $mode="luxury";
}
$query="insert into bookings(username,package,phone,address,email,men,women,date,mode,additional)values('$f','$a','$b','$c','$e','$men','$women','$d','$mode','$g')";
$res=mysqli_query($link,$query);
if($res)
{
     echo $a ."<br>".$b ."<br>".$c ."<br>".$d ."<br>".$e ."<br>".$f ."<br>".$g ."<br>".$women ."<br>".$men ."<br>".$mode ."<br>";
     
    ?>
    
    <script language="javascript">alert('Booking success');window.location.replace('home.php');</script>
    <?php
}

else
{ echo $query;
    ?>
     <!-- <script language="javascript">alert('Booking failed');window.location.replace('home.php');</script> -->
    <?php



}
?>


 