<?php
session_start();
include 'connect.php';
$a=$_GET['name'];
$query="delete from packages where pname='$a'";
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
    <script language="javascript">alert('delete failed');window.location.replace('uploadlist.php');</script>
    <?php
}

?>
