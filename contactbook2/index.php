<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kontakt qo'shish</h1>
    <form action="save.php" method="POST">
        <label for="">Ism:</label>
        <input type="text" name="name" required><br><br>

        <label for="">Telefon:</label>
        <input type="text" name="phone" required><br><br>

        <label for="">Email:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Saqlash</button>
    </form>

    <h2>Barcha kontaktlar</h2>
    <ul>
        <?php
        $file='contacts.txt';
        if(file_exists($file)){
            $lines=file($file);
            foreach($lines as $index=>$line){
                echo "<li>". htmlspecialchars($line)."<a href='delete.php?id=$index'>[O‘chirish]</a></li>";
            }
            
        }
        else{
            echo "Kontaktlar yoq";
        }
        ?>
    </ul>
</body>
</html>