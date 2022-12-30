<?php
session_start();
$a=$_SESSION['logged'];
?>


<div class="container">
 
<h2>list item </h2>
 
<table width="800" border="2">
 
 
 <tr>
 
 <td> Package name</td>
 <td> Description</td>
 <td> Price</td>
 <td> Image</td>
 <td> Action</td>
 <td> Action</td>
 
 
 
</tr>
 

 
<?php
 
include 'connect.php';
 
$query="select * from packages";
 
$res=mysqli_query($link,$query);
 
while($row=mysqli_fetch_array($res))
 
{
 
 $g=$row['pid'];
 $a=$row['pname'];
 $b=$row['pdes'];
 $c=$row['prate'];
 $f=$row['image'];
 

 $image="uploads/".$f;
 
 ?>
 
 <tr>
 
 <td><?php echo $a;?></td>
 
 <td><?php echo $b;?></td>
 <td><?php echo $c;?></td>
 <td><img src="<?php echo $image;?> "height="200" width="200"></td>
 
 <td><a href="imgdeleteprocess.php?name=<?php echo $a;?>">Delete</a></td><td><a href="packedit.php?name=<?php echo $a;?>&& id=<?php echo $g;?>">Edit</a></td>
 
 </tr>
 
 
<?php
 
 
}
 
 
?>
 
 
</table>
 
 
</div>
 