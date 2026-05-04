<?php
class Auteur {
    private $conn;
    private $table = "auteurs";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($nom, $prenom, $nationalite) {
        $stmt = $this->conn->prepare("INSERT INTO auteurs(nom, prenom, nationalite) VALUES (?, ?, ?)");
        return $stmt->execute([$nom, $prenom, $nationalite]);
    }

    public function read() {
        return $this->conn->query("SELECT * FROM auteurs");
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM auteurs WHERE id=?");
        return $stmt->execute([$id]);
    }
}