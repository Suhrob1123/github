<h2>Login</h2>
<form action=""method="POST">
    Login: <input type="text" name="login">
    Parol: <input type="text" name="parol">
    <button>kirish</button>
</form>
<p>Ro'yxatdan o'tmaganmisiz? <a href="registration.php">Ro'yxatdan o'tish</a></p>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login=$_POST["login"];
    $parol=$_POST["parol"];

    $users = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $found=false;

    foreach($users as $user){
        list($savedLogin,$savedParol)=explode('|',trim($user));
        if($login===$savedLogin && $parol===$savedParol){
            $found=true;
            break;
        }
    }
    if($found){
        header("Location:welcome.php");
        exit;
    }else{
        echo "Login yoki parol xato";
    }
}
?>

