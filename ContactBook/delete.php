<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];

    $file = 'contacts.json';
    if (file_exists($file)) {
        $contacts = json_decode(file_get_contents($file), true);
        if (isset($contacts[$index])) {
            array_splice($contacts, $index, 1);
            file_put_contents($file, json_encode($contacts, JSON_PRETTY_PRINT));
        }
    }
}

header('Location: index.php');
exit;
