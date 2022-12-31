<?php
session_start();
include 'connect.php';
$username=$_SESSION['logged'];
$id=$_POST["id"];
$name=$_POST['pname'];
$des=$_POST['description'];
$rate=$_POST['rate'];
$file_name = $_FILES['pdf']['name'];
$file_name = preg_replace('/\s+/', '', $file_name);
$file_tmp = $_FILES['pdf']['tmp_name'];
move_uploaded_file($file_tmp,"./uploads/pdf/".$file_name);
 $originalImgName= $_FILES['image']['name']; 
$tempName= $_FILES['image']['tmp_name'];
$folder="uploads/";
move_uploaded_file($tempName,$folder.$originalImgName);
 if (empty($originalImgName) && $file_name  ) {


    $query="update packages set pname='$name',pdes='$des',prate='$rate' ,pseat='$file_name' where pid='$id'";

 }else  if(empty($file_name) &&$originalImgName  ) {

    $query="update packages set pname='$name',pdes='$des',prate='$rate'  ,image='$originalImgName' where pid='$id'";
 }
else if(empty($file_name)&& empty($originalImgName) ) {
    $query="update packages set pname='$name',pdes='$des',prate='$rate'   where pid='$id'";

}
else{
    $query="update packages set pname='$name',pdes='$des',prate='$rate' ,image='$originalImgName',pseat='$file_name' where pid='$id'";

}
$res=mysqli_query($link,$query);
if($res)
{
    
    // echo $originalImgName; 
    // echo $file_name; 
    // echo $query;
     ?>
    <script language="javascript">alert('Updation success');window.location.replace('adminhome.php');</script>
    <?php
      
      }else
{
    ?>
<script language="javascript">alert('Updation Failed');window.location.replace('packedit.php');</script>
<?php
}
    // echo $res;
  



?>