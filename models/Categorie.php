<?php
class Categorie {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($libelle) {
        $stmt = $this->conn->prepare("INSERT INTO categories(libelle) VALUES (?)");
        return $stmt->execute([$libelle]);
    }

    public function read() {
        return $this->conn->query("SELECT * FROM categories");
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id=?");
        return $stmt->execute([$id]);
    }
}