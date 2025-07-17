<!DOCTYPE html>
<html>
<head>
    <title>Kontaktlar ro'yxati</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        form { margin-bottom: 30px; }
        input, button { margin: 5px 0; display: block; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
    </style>
</head>
<body>

    <h2>Kontakt qo‘shish</h2>
    <form method="POST" action="save.php">
        <input type="text" name="name" placeholder="Ism" required>
        <input type="text" name="phone" placeholder="Telefon" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Saqlash</button>
    </form>

    <h2>Barcha kontaktlar</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Amal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contactsFile = 'contacts.json';
            if (file_exists($contactsFile)) {
                $contacts = json_decode(file_get_contents($contactsFile), true);
                if (!empty($contacts)) {
                    foreach ($contacts as $index => $contact) {
                        echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td>" . htmlspecialchars($contact['name']) . "</td>
                            <td>" . htmlspecialchars($contact['phone']) . "</td>
                            <td>" . htmlspecialchars($contact['email']) . "</td>
                            <td>
                                <form method='POST' action='delete.php' onsubmit=\"return confirm('O‘chirishga ishonchingiz komilmi?')\">
                                    <input type='hidden' name='index' value='$index'>
                                    <button type='submit'>O‘chirish</button>
                                </form>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Hozircha kontaktlar yo‘q.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Hozircha kontaktlar yo‘q.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
