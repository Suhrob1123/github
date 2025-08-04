<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>O'zgartirish</h2><form action="" method="POST">
    ism:<input type="text"name="name">
    email: <input type="email" name="email">
    <button type="submit">Update</button>
    </form>
</body>
</html>

<?php
require_once "users.php";
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];

    $updateduser=new Users();
    $updateduser->update($id,$name,$email);
    header("location: index.php");
    exit;

}