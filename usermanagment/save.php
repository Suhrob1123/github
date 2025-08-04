<?php
require_once "users.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!empty($name) && !empty($email)) {
        $postObj = new Users();
        $postObj->create($name, $email);
        header("Location: index.php");
        exit;
    } else {
        echo "Barcha maydonlarni to‘ldiring.";
    }
} else {
    echo "Notog‘ri so‘rov!";
}