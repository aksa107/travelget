<?php
session_start();
include 'connect.php';
$name=$_GET['aname'];
$query="delete from admin where name='$name'";
$res=mysqli_query($link,$query);
if($res)
{
?>

<script language="javascript">alert('delete success');window.location.replace('adminhome.php');</script>
<?php
 
}
else
{
    echo " deletion failed";
}





?>
