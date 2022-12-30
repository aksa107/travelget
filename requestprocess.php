<?php
include 'connect.php';
$a=$_POST['rname'];
$b=$_POST['rnumber'];
$c=$_POST['rmail'];
$d=$_POST['rmessage'];
$query="insert into request(rname,rnumber,rmail,rmessage) values('$a','$b','$c','$d')";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Request success');window.location.replace('home.php');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('Registration failed');window.location.replace('contac.php');</script>
    <?php



}
?>


 