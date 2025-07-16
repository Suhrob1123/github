<?php
require_once "book.php";

class Liberary{
    private array $books = [];

    public function addBook(book $book):void{
        $this->books[]=$book;
    }

    public function listBooks():void{
        if(empty($this->books)){
            echo "kitoblar mavjud emas";
            return;
        }
        foreach($this->books as $index=> $book){
            echo ($index+1) . "." . $book->getInfo() . "\n";
        }
    }
    public function findBookByAuthor(string $author){
        return array_filter($this->books, function (book $book) use ($author){
            return strtolower($book->getAuthor())=== strtolower($author);
        });

    }

    public function removeBookByTitle(string $title):bool {
        foreach($this->books as $index=>$book){
            if(strtolower($book->getTitle())===strtolower($title)){
                unset($this->books[$index]);
                $this->books=array_values($this->books);
                return true;
            }
        }
        return false;
    }
}