<?php
class Database {
    private $host = "localhost";
    private $db_name = "oop_posts";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password
            );

            // Xatoliklarni aniq ko‘rsatish uchun
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Ulanish obyektini qaytaradi
            return $this->conn;
        } catch (PDOException $e) {
            echo "Xatolik: " . $e->getMessage();
            return null;
        }
        return $this->conn;
    }
}
