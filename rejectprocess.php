<?php
include 'connect.php';
$a=$_GET['id'];
$status="rejected";
$query="update bookings set status='$status' where id='$a'";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('rejection success');window.location.replace('adminhome.php');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('rejection   failed');window.location.replace('adminhome.php');</script>
    <?php



}
?>


 