<?php
require_once "post.php";

// Saqlash
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = new Post($_POST['title'], $_POST['content']);
    
    $allPosts = [];
    if (file_exists('posts.json')) {
        $allPosts = json_decode(file_get_contents('posts.json'), true);
    }

    $allPosts[] = $post->toArray();
    file_put_contents('posts.json', json_encode($allPosts, JSON_PRETTY_PRINT));
}

// O‘qish
$posts = [];
if (file_exists('posts.json')) {
    $saved = json_decode(file_get_contents('posts.json'), true);
    foreach ($saved as $item) {
        $posts[] = new Post($item['title'], $item['content']);
    }
}
?>

<h1>Mini Blog</h1>
<form method="POST">
    <input type="text" name="title" placeholder="Sarlavha"><br><br>
    <textarea name="content" placeholder="Kontent"></textarea><br><br>
    <button type="submit">Yaratish</button>
</form>

<hr>

<?php
foreach ($posts as $post) {
    $post->display();
    
}

?>
