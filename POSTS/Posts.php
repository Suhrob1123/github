<?php
require_once "database.php";

class Posts {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function getAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM posts ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $content) {
        $stmt = $this->pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
        return $stmt->execute([
            'title' => $title,
            'content' => $content
        ]);
    }
}
