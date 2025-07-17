<?php
if(isset($_GET["id"])){
    $id=(int)$_GET["id"];
    $file="contacts.txt";
    if (file_exists($file)) {
        $lines = file($file);
        unset($lines[$id]);
        file_put_contents($file, implode("", $lines));
    }
}
header("Location: index.php");
exit();