<?php
$login=$_POST["login"];
$parol=$_POST["parol"];
$file=fopen("login.csv","r");
$chek=fgetcsv($file);
if($chek[0]===$login && $chek[1]===$parol){
    echo "xsuh kelibsiz";
}
