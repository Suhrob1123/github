<?php

//1-usul
/* use HTML as H;

require_once "fornamspace.php";

$thing=new H\something();
echo $thing->up(); */


//2-usul
use HTML\something; // bu shu namepace ichidagi aynan shu klass

require_once "fornamspace.php";

$thing=new something();
echo $thing->up();



//Autoloader - classlarni avtomatik yuklash, qolsa har birini require qilib o'tirmasdan bitta faylga autoloader funksiyasi yoziladi va shu fayl require qilinishi yetarli bo'ladi.

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});     //autoload funksiyasi



//