<?php
require_once "Posts.php";

$postsObj = new Posts();
$posts = $postsObj->getAll();
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Postlar</title>
</head>
<body>
    <h1>Barcha postlar</h1>
    <a href="create.php">Yangi post qo‘shish</a>
    <hr>
    <?php foreach($posts as $post): ?>
        <div>
            <h2><?= htmlspecialchars($post['title']) ?></h2>
            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
            <small><?= $post['created_at'] ?></small>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>
