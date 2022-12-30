<div class="container">

<h2>Admin List</h2>
<table border="4px" width="70">

<tr>

<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>Password</td>

</tr>



<?php
include 'connect.php';
$query="select * from admin";
$res=mysqli_query($link,$query);
while($row=mysqli_fetch_array($res))
{

$fname=$row['aname'];
$email=$row['amail'];
$phone=$row['aphone'];
$password=$row['apassword'];
?>

<tr>
  <td><?php echo $fname;?></td>
  <td><?php echo $email;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $password;?></td>

  <td><a href="admindeleteprocess.php?aname=<?php echo $fname;?>">Delete</a>
</tr>


<?php

}


?>

</table>    


</div>