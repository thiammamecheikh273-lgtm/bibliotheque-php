<?php require_once "../controllers/AuteurController.php"; ?>

<h2>Auteurs</h2>

<form method="POST">
    <input name="nom" placeholder="Nom">
    <input name="prenom" placeholder="Prenom">
    <input name="nationalite" placeholder="Nationalité">
    <button name="add">Ajouter</button>
</form>

<?php
$data = $auteur->read();
while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    echo $row['nom'] . " <a href='?delete=".$row['id']."'>Supprimer</a><br>";
}
?>