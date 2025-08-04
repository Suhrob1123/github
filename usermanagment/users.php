<?php
require 'db.php';

class Users{
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function getAll(){
        $stmt = $this->pdo->prepare("SELECT * FROM users ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        return $stmt->execute([
            'name' => $name,
            'email' => $email
        ]);
       
    }
    

    public function delete($id){
        $stmt=$this->pdo->prepare("DELETE  FROM users WHERE id=:id ");
        return $stmt->execute(['id' => $id]);
    }

    public function getById($id){
        $stmt=$this->pdo->prepare("SELECT *FROM users WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$name,$email){
        $stmt=$this->pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}