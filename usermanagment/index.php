<?php
require_once "users.php";
$user=new Users();
$users=$user->getAll();
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
    <h1>Foydalamuvchilar ro'yhati</h1>
    <a href="create.php">Foydalanuvchi qo'shish</a>

    <?php foreach($users as $user):?>
       <a href="userpage.php?id=<?= $user['id']?>"><h4> <?= $user['name'] ?></h4></a>
        <h4><?= $user['email'] ?></h4>
        <a href="update.php?id=<?= $user['id'] ?>">Update</a>
        <a href="userpage.php?id=<?= $user['id'] ?>" onclick="return confirm('Haqiqatan o‘chirmoqchimisiz?')">O‘chirish</a>
        <hr>
    <?php endforeach ?>
</body>
</html>