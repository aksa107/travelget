<?php
session_start();
include 'connect.php';
$name=$_GET['name'];
$query="delete  from request where id='$name'";
$res=mysqli_query($link,$query);
if($res)
{
    echo $query
?>
<script language="javascript">alert('delete success');window.location.replace('adminhome.php');</script>
<?php
 
}
else
{
    echo " deletion failed";
}





?>