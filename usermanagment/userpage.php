<?php
require_once "users.php";
$id=$_GET['id'] ?? null;
$userID= new Users();
$user=$userID->getById($id);
if ($user && is_array($user)) {
    echo "Ismi: " . $user['name'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
} else {
    echo "User topilmadi!";
}   


