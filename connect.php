<?php
$link=mysqli_connect('localhost','root');
$db="tour";

if(!$link)
{
    die("Could not connect:".mysqli_error());
}
else
{
    echo '';
}

$db=mysqli_select_db($link,"tour");

if(!$db)
{
    die("Could not select:".mysqli_error($link));
}

?>