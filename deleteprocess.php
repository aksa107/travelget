<?php
session_start();
include 'connect.php';
$name=$_GET['name'];
// $query="delete from signup where name='$name'";
// $querys="delete from bookings where username='$name'";
$query= "DELETE signup, bookings FROM signup
JOIN bookings ON signup.name = bookings.username
WHERE signup.name = '$name'";
// mysqli_query($link,$querys);
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
