<?php
require_once "users.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id=(int)$_GET['id'];

    $d=new Users();
    $d->delete($id);
    header("Location: index.php");
    exit;
}