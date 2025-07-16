<?php
require_once "book.php";
require_once "liberray.php";

$library=new Liberary();

while(true){
    echo "\n--- Kutubxona Tizimi ---\n";
    echo "1. Kitob qo‘shish\n";
    echo "2. Kitoblarni ko‘rish\n";
    echo "3. Muallif bo‘yicha qidirish\n";
    echo "4. Kitob o‘chirish (sarlavha bo‘yicha)\n";
    echo "5. Chiqish\n";
    echo "Tanlang (1-5): ";
    $choice = trim(fgets(STDIN));

    switch($choice){
        case 1:
            echo "Kitob nomi: ";
            $title = trim(fgets(STDIN));
            echo "Muallif: ";
            $author = trim(fgets(STDIN));
            echo "Yil: ";
            $year = (int)trim(fgets(STDIN));

            $book = new Book($title, $author, $year);
            $library->addBook($book);
            echo "✅ Kitob muvaffaqiyatli qo‘shildi.\n";
            break;

        case 2:
            echo "--- Barcha kitoblar ---\n";
            $library->listBooks();
            break;

        case 3:
            echo "Muallif nomini kiriting: ";
            $author = trim(fgets(STDIN));
            $books = $library->findBookByAuthor($author);
            if (empty($books)) {
                echo "❌ Ushbu muallifga oid kitob topilmadi.\n";
            } else {
                echo "--- Natijalar ---\n";
                foreach ($books as $book) {
                    echo $book->getInfo() . "\n";
                }
            }
            break;

        case 4:
            echo "O‘chirmoqchi bo‘lgan kitob nomini kiriting: ";
            $title = trim(fgets(STDIN));
            if ($library->removeBookByTitle($title)) {
                echo "✅ Kitob o‘chirildi.\n";
            } else {
                echo "❌ Kitob topilmadi.\n";
            }
            break;
        case 5:
            echo "Dasturdan chiqildi.\n";
            exit;
        default:
            echo "⚠️ Noto‘g‘ri tanlov.\n";
            break;
    }
}
