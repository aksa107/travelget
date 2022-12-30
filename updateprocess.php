<?php
session_start();
$username=$_SESSION['logged'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['password'];
include 'connect.php';
$query="update signup set name='$a',email='$b',phone='$c',password='$d' where name='$username'";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Updation success');window.location.replace('login.html');</script>
    <?php
}

else
{
    ?>
<script language="javascript">alert('Updation Failed');window.location.replace('signup.html');</script>
<?php




}
?>