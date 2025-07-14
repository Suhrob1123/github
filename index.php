<?php
/* echo "Hi I'm here ";

// Data types
$age=5; //int
$price=99.99; //float
$name="Someone"; //string
$istrue=true; //boolen
$colors = ["red", "green", "blue"];//array

echo $age,$price,$name,$istrue;


//array
foreach ($colors as $color) {
    echo $color . "<br>";
}
//if boolen
if($istrue){
    echo "true" ."\n";
}



//var_dumb and operators
$a = 80;
$b = 50;
$c = "80";
var_dump($a == $c) . "\n";
var_dump($a != $b) . "\n";
var_dump($a <> $b) . "\n";
var_dump($a === $c) . "\n";
var_dump($a !== $c) . "\n";
var_dump($a < $b) . "\n";
var_dump($a > $b) . "\n";
var_dump($a <= $b) . "\n";
var_dump($a >= $b);


//switch case 
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "End of the week!";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend!";
        break;
    default:
        echo "Mid-week!";
}



//function

function add($a,$b){
    return $a+$b;
}
echo add(5,6)."\n";

$str="Hello world";
echo strlen($str). "\n";// built-in function



//factorial
function factorial($n){
    if($n==0){return 1;}
    else return $n*factorial($n-1);
}
echo factorial(5);


$son=5;
$son2=6;
if($son!=$son2)
{echo "ha";
}
else echo "yoq <br>" ;



//loops
//while
$i=1;
while($i<=5)
{
echo "son $i <br>";
$i++;
} 



//do-while
$i = 1;
do {
    echo "Son: $i <br>";
    $i++;
} while ($i <= 5);


//foreach
$cars=["a","b","c"];
foreach($cars as $car){echo "$car <br>";}



//Associative array 
$user=[
    "name"=>"Suhrob",
    "age"=>21,
    "place"=>"Urganch"
];
foreach($user as $key => $value){
    echo "$key : $value <br>";
}
 */

 // functions 
 //Anonymous func
 $salomlash=function($ism){
    echo "salom, $ism";
 };
 echo $salomlash("Suxrob");



 //arrays

 $mevalar = ["olma", "banan", "nok"];//oddiy array

 $ranglar = ["qizil", "yashil", "ko‘k"];

echo $ranglar[0]; 
echo $ranglar[2]; //indeks orqali chiqarish

//key-value array
$student = [
    "ism" => "Suxrob",
    "yosh" => 21,
    "shahar" => "Urganch"
];

echo $student["ism"];    
echo $student["shahar"];


//kop olchovli array
$talabalar = [
    ["Ali", 20, "IT"],
    ["Gulbahor", 21, "Pedagogika"],
    ["Jamshid", 19, "Matematika"]
];

echo $talabalar[0][0]; 
echo $talabalar[1][2]; 


//array_push: oxiriga qoshadi
$mevalar = ["olma", "anor"];
array_push($mevalar, "banan", "gilos");//mevalarga ikkita element qoshildi


//array_pop: oxiridan elemnt olib tashlaydi
$sonlar = [10, 20, 30, 40];
$oxirgisi = array_pop($sonlar);//oxirgi sonni shu ozgaruvchi yuklaydi
echo "Olib tashlangan: $oxirgisi\n";
print_r($sonlar);


//array_merge
$a = ["a", "b"];
$b = [1, 2];
$c = array_merge($a, $b);// arraylarni birlashtiradi
print_r($c);


//array_shift : boshidan element olib tashlaydi
$mevalar = ["olma", "banan", "anor"];
$bosh = array_shift($mevalar);
echo "Olib tashlandi: $bosh\n";
print_r($mevalar);


//array_unshift: boshiga element qoshadi
$sonlar = [2, 3];
array_unshift($sonlar, 1);
print_r($sonlar);


// inarray : mavjudlikka tekshirish
$ranglar = ["qizil", "yashil", "ko‘k"];
if (in_array("yashil", $ranglar)) {
    echo "Bor\n";
} else {
    echo "Yo‘q\n";
}


//array_keys va array_values : key-value arrayda faqat keyni yoki value ni chiqarish uchun
$student = ["name" => "Ali", "age" => 21];
print_r(array_keys($student));   // ["name", "age"]
print_r(array_values($student)); // ["Ali", 21]


?>





<!--  for get method 
 <a href="main.php?name=Suxrob&age=21">Kirish</a>  -->



<!-- for post method -->
<form action="main.php" method="POST">
    Ism: <input type="text"name="ism">
    <button type="submit">send</button>
</form>


<!-- Yuklash formasi -->
<form method="POST" action="upload.php" enctype="multipart/form-data">
  Fayl tanlang: <input type="file" name="myfile">
  <button type="submit">Yuklash</button>
</form>

