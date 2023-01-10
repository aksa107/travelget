<?php
include "connect.php";

$a=$_POST['pname'];
$b=$_POST['pdes'];
$c=$_POST['ecnomy'];
$d=$_POST['pdetails'];
$e=$_POST['luxury'];



$file_name = $_FILES['pdf']['name'];
$file_name = preg_replace('/\s+/', '', $file_name);
$file_tmp = $_FILES['pdf']['tmp_name'];
move_uploaded_file($file_tmp,"./uploads/pdf/".$file_name);

$extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
             $originalImgName= $_FILES['image']['name']; 
             $tempName= $_FILES['image']['tmp_name'];
             $folder="uploads/";
             if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
{
if (move_uploaded_file($tempName,$folder.$originalImgName)) {
    // code...
    $query="insert into packages (pname,pdes,prate,pluxury,pdate,pseat,image) values('$a','$b','$c','$e','$d','$file_name','$originalImgName')";
    $res=mysqli_query($link,$query) or die(mysqli_error($link));
       if($res) {

        //    echo $tempName;
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
}}
else
{
echo "Please Choose image JPG,PNG,JPEG for images";
}
?>
