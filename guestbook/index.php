
<h2>Royhatga olish</h2>
<form action="save.php"method="POST">
    Name: <input type="text" name="name">
    Country: <input type="text" name="country">
    <button>send</button>
</form>
<h2>Mehmonlar royhati</h2>
<ul>
<?php
$data='guest.txt';
if(file_exists($data)){
    $files=file($data);
    foreach($files as $file){
        echo "<li>" . $file;
    }
}
?>
</ul>