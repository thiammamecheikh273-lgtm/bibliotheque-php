<?php
class Livre {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($titre, $isbn, $annee, $quantite, $auteur_id, $categorie_id) {
        $stmt = $this->conn->prepare(
            "INSERT INTO livres(titre, isbn, annee, quantite, auteur_id, categorie_id)
             VALUES (?, ?, ?, ?, ?, ?)"
        );
        return $stmt->execute([$titre, $isbn, $annee, $quantite, $auteur_id, $categorie_id]);
    }

    public function read() {
        return $this->conn->query("SELECT * FROM livres");
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM livres WHERE id=?");
        return $stmt->execute([$id]);
    }
}