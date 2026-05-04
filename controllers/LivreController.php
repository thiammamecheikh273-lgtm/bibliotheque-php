<?php
require_once "../config/Database.php";
require_once "../models/Livre.php";

$db = (new Database())->getConnection();
$livre = new Livre($db);

if(isset($_POST['add'])) {
    $livre->create(
        $_POST['titre'],
        $_POST['isbn'],
        $_POST['annee'],
        $_POST['quantite'],
        $_POST['auteur_id'],
        $_POST['categorie_id']
    );
}

if(isset($_GET['delete'])) {
    $livre->delete($_GET['delete']);
}