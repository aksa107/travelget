<?php

session_start();
include 'connect.php';?><script>
 
//    console.log('res: ', res);

</script> <?php

$php_var_val= $_COOKIE['js_var_value'];
    echo $php_var_val;
$a=$_POST['cnumber'];
$b=$_POST['cname'];
$c=$_POST['cdate'];
$d=$_POST['cvv'];
$user=$_SESSION['logged'];
;
// $phpVar=echo $phpVar;
$query="Insert into payment(customer,cnumber,cname,cdate,cvv,amount) values('$user','$a','$b','$c','$d',' $php_var_val')";
echo $query;
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('Payment success');window.location.replace('userbookings.php');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('Payment failed');window.location.replace('package.php');</script>
    <?php
}
?>


 