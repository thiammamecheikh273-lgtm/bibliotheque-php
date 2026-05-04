<?php
require_once "../config/Database.php";
require_once "../models/Auteur.php";

$db = (new Database())->getConnection();
$auteur = new Auteur($db);

if(isset($_POST['add'])) {
    $auteur->create($_POST['nom'], $_POST['prenom'], $_POST['nationalite']);
}

if(isset($_GET['delete'])) {
    $auteur->delete($_GET['delete']);
}