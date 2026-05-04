<?php
require_once "../config/Database.php";
require_once "../models/Categorie.php";

$db = (new Database())->getConnection();
$categorie = new Categorie($db);

if(isset($_POST['add'])) {
    $categorie->create($_POST['libelle']);
}

if(isset($_GET['delete'])) {
    $categorie->delete($_GET['delete']);
}