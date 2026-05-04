<?php require_once "../controllers/CategorieController.php"; ?>

<h2>Categories</h2>

<form method="POST">
    <input name="libelle" placeholder="Libellé">
    <button name="add">Ajouter</button>
</form>

<?php
$data = $categorie->read();
while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    echo $row['libelle'] . " <a href='?delete=".$row['id']."'>Supprimer</a><br>";
}
?>