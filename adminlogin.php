<?php
session_start();
include 'connect.php';
$username=$_POST['aname'];
$password=$_POST['apassword'];
echo 'username:'.$username;
$query="select * from admin where aname='$username' and apassword='$password'";
$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))

{
    $_SESSION['logged']=$username;
    ?>

 <script language="javascript">alert('login success');window.location.replace('adminhome.php')</script>
 
 <?php
}
else
{
?>
 <script language="javascript">alert('login failed');window.location.replace('adminlogin.html')</script>
 <?php
}

?>