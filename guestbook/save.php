<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['name'];
$country=$_POST['country'];
$line = "$name | $country\n";
file_put_contents("guest.txt",$line,FILE_APPEND);

}
header("Location: index.php");
exit();