<?php
include 'connect.php';
$a=$_POST['aname'];
$b=$_POST['amail'];
$c=$_POST['aphone'];
$d=$_POST['apassword'];
$query="insert into admin(aname,amail,aphone,apassword) values('$a','$b','$c','$d')";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Registration success');window.location.replace('adminlogin.html');</script>
    <?php
}

else
{
    ?>
<script language="javascript">alert('Registration Failed');window.location.replace('adminregister.html');</script>
<?php




}
?>





