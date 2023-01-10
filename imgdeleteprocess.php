<?php
session_start();
include 'connect.php';
$a=$_GET['name'];
$query="delete from packages where pname='$a'";
echo $query;
$res=mysqli_query($link,$query);
if($res)
{
?>

<script language="javascript">alert('delete success');window.location.replace('uploadlist.php');</script>
<?php
 
}
else
{
    ?>
    <script language="javascript">alert('some customers booked this package please remove that booking Foreign key error');window.location.replace('uploadlist.php');</script>
    <?php
}

?>
