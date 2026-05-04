<?php require_once "../controllers/LivreController.php"; ?>

<h2>Livres</h2>

<form method="POST">
    <input name="titre" placeholder="Titre">
    <input name="isbn" placeholder="ISBN">
    <input name="annee" placeholder="Année">
    <input name="quantite" placeholder="Quantité">
    <input name="auteur_id" placeholder="Auteur ID">
    <input name="categorie_id" placeholder="Categorie ID">
    <button name="add">Ajouter</button>
</form>

<?php
$data = $livre->read();
while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    echo $row['titre'] . " <a href='?delete=".$row['id']."'>Supprimer</a><br>";
}
?>