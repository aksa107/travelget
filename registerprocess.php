<?php
include 'connect.php';
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['password'];
$query="insert into signup(name,email,phone,password)values('$a','$b','$c','$d')";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Registration success');window.location.replace('login.html');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('Registration failed');window.location.replace('signup.html');</script>
    <?php



}
?>


 