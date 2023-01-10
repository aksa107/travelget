<?php


include 'connect.php';
$a=$_POST['cnumber'];
$b=$_POST['cname'];
$c=$_POST['cdate'];
$d=$_POST['cvv'];
include 'connect.php';
$query="Insert into payment(cnumber,cname,cdate,cvv) values('$a','$b','$c','$d')";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Payment success');window.location.replace('userbooking.php');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('Payment failed');window.location.replace('package.php');</script>
    <?php
}
?>


 