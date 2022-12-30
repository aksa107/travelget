<?php
include "connect.php";

$a=$_POST['pname'];
$b=$_POST['pdes'];
$c=$_POST['prate'];
$d=$_POST['pdate'];
$e=$_POST['pseat'];

             $originalImgName= $_FILES['image']['name'];
             $tempName= $_FILES['image']['tmp_name'];
             $folder="uploads/";
if (move_uploaded_file($tempName,$folder.$originalImgName)) {
    // code...
    $query="insert into packages (pname,pdes,prate,pdate,pseat,image) values('$a','$b','$c','$d','$e','$originalImgName')";
    $res=mysqli_query($link,$query) or die(mysqli_error($link));
       if($res) {
        ?>
        <script language="javascript">alert('upload success');window.location.replace('adminhome.php');</script>
        <?php
    }
    else
    {
        ?>
        <script language="javascript">alert('upload failed');window.location.replace('image.php'); </script>
        <?php 
    }
}
?>
