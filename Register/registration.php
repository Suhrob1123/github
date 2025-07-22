<h2>Ro'yhatdan o'tish</h2>
<form action=""method="POST">
    login: <input type="text" name="login">
    parol: <input type="text" name=" parol">
    <button>Ro'yhatdan o'tish</button>
</form>
<p>Allaqachon ro'yxatdan o'tgansiz? <a href="login.php">Login</a></p>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $login=$_POST["login"];
    $parol=$_POST["parol"];

    $data=$login."|" . $parol . PHP_EOL;
    file_put_contents("users.txt",$data, FILE_APPEND);
    header("Location:welcome.php");
    exit;
}
?>

