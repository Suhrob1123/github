<?php
$file=fopen("data.txt","w");//yozish uchun ochish
fwrite($file,"Salom , bu yzilgan matn");
fclose($file);

$file=fopen("data.txt","r");//oqish uchun ochish
$content=fread($file,filesize("data.txt"));
fclose($file);
echo $content;



if(file_exists("data.txt")){
    echo "yes";    
}//mavjudlikka tekshirish


//csv ni o'qib ekranga chiqarish
$filename="data.csv";
if(file_exists($filename)){
    $file=fopen($filename,"r");
    while(($data=fgetcsv($file))!==FALSE)
    {
        print_r($data);
    }
    fclose($file);
}
else {
    echo "file mavjud emas";
}


//csv faylga yozish
$data=[
    [1,"Ali","ali@example.com"],
    [2,"Vali","vali@example.com"],
    [3,"Bali","Bali@example.com"]
];
$file=fopen("data2.csv","w");
foreach($data as $d){
    fputcsv($file,$d);
}
fclose($file);
echo "yozildi . <br> ";



//formdan kelganni csv ga yozish

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="csv.php" method="post">
  <label>Ismingiz:</label>
  <input type="text" name="name" required><br>
  
  <label>Email:</label>
  <input type="email" name="email" required><br>
  
  <input type="submit" value="Yuborish">
</form>

</body>
</html>