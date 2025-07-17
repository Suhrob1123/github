<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=trim($_POST["name"]);
    $phone=trim($_POST["phone"]);
    $email=trim($_POST["email"]);

    $line = "$name | $phone | $email\n";

    file_put_contents("contacts.txt",$line,FILE_APPEND);
}

header("Location: index.php");
exit();

