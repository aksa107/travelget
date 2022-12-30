<?php
session_start();
include 'connect.php';
$username=$_POST['name'];
$password=$_POST['password'];
echo 'username:'.$username;
$query="select * from signup where name='$username' and password='$password'";
$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))

{
    $_SESSION['logged']=$username;
    ?>

 <script language="javascript">alert('login success');window.location.replace('home.php')</script>
 
 <?php
}
else
{
?>
 <script language="javascript">alert('login failed');window.location.replace('login.html')</script>
 <?php
}

?>