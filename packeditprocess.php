<?php
session_start();
$username=$_SESSION['logged'];
$id=$_GET['id'];
$name=$_GET['pname'];
$des=$_GET['description'];
$rate=$_GET['rate'];
$image=$_GET['image'];
$path="uploads/".$image;
include 'connect.php';
$query="update packages set pname='$name',pdes='$des',prate='$rate' where pid='$id'";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Updation success');window.location.replace('adminhome.php');</script>
    <?php
}

else
{
    ?>
<script language="javascript">alert('Updation Failed');window.location.replace('packedit.php');</script>
<?php
}
?>