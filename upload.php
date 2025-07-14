<?php
//"mylife" formada yuborilgan name
if (isset($_FILES['myfile'])) {
    move_uploaded_file($_FILES['myfile']['tmp_name'], "uploads/" . $_FILES['myfile']['name']);
    echo "Fayl yuklandi!";
}
/* php faylda formdan kelganni qabul qilishga oddiy misol
$username = $_POST['username'];
$file = $_FILES['myfile']; */
?>