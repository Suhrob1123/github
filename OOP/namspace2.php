<?php

//1-usul
/* use HTML as H;

require_once "fornamspace.php";

$thing=new H\something();
echo $thing->up(); */

use HTML\something; // bu shu namepace ichidagi aynan shu klass

require_once "fornamspace.php";

$thing=new something();
echo $thing->up();
