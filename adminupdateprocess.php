<?php
session_start();
$username=$_SESSION['logged'];
$a=$_POST['aname'];
$b=$_POST['amail'];
$c=$_POST['aphone'];
$d=$_POST['apassword'];
include 'connect.php';
$query="update admin set amail='$b',aphone='$c',apassword='$d' where aname='$username'";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Updation success');window.location.replace('adminlogin.html');</script>
    <?php
}

else
{
    ?>
<script language="javascript">alert('Updation Failed');window.location.replace('signup.html');</script>
<?php




}
?>