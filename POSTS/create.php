<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Yangi post</title>
</head>
<body>
    <h1>Post qo‘shish</h1>
    <form action="save.php" method="POST">
        <label for="title">Sarlavha:</label><br>
        <input type="text" name="title" required><br><br>

        <label for="content">Kontent:</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>

        <button type="submit">Saqlash</button>
    </form>
</body>
</html>
