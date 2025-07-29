<?php
require_once "Posts.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    if (!empty($title) && !empty($content)) {
        $postObj = new Posts();
        $postObj->create($title, $content);
        header("Location: index.php");
        exit;
    } else {
        echo "Barcha maydonlarni to‘ldiring.";
    }
} else {
    echo "Notog‘ri so‘rov!";
}
