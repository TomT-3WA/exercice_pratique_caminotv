<?php
require_once('../connect.php');

if (isset($_POST)) {
    if (
        isset($_POST['title']) && !empty($_POST['title'])
        && isset($_POST['is_Enable']) && !empty($_POST['is_Enable'])
    ) {
        $produit = strip_tags($_POST['title']);
        $prix = strip_tags($_POST['is_Enable']);

        $sql = "INSERT INTO `liste` (`title`, `is_Enable`) VALUES (:title, :is_Enable);";

        $query = $db->prepare($sql);

        $query->bindValue(':title', $produit, PDO::PARAM_STR);
        $query->bindValue(':is_Enable', $prix, PDO::PARAM_STR);

        $query->execute();
        $_SESSION['message'] = "Item ajouté avec succès !";
        header('Location: display.php');
    }
}

require_once('../close.php'); ?>

<form method="post">
    <label for="item">Titre</label>
    <input type="text" name="title" id="title">
    <label for="title">Afficher</label>
    <input type="text" name="is_Enable" id="is_Enable">
    <button>Enregistrer</button>
</form>