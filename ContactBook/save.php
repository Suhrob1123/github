<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($name && $phone && $email) {
        $newContact = [
            'name'  => $name,
            'phone' => $phone,
            'email' => $email
        ];

        $file = 'contacts.json';
        $contacts = [];

        if (file_exists($file)) {
            $contacts = json_decode(file_get_contents($file), true);
        }

        $contacts[] = $newContact;

        file_put_contents($file, json_encode($contacts, JSON_PRETTY_PRINT));
    }
}

header('Location: index.php');
exit;
