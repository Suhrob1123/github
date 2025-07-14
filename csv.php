<?php
$name=$_POST['name']??'';
$email = $_POST['email'] ?? '';
$file=fopen("data.csv","a");
fputcsv($file,[$name,$email]);
fclose($file);
echo "saqlandi";