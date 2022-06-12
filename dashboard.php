<?php

require "header.php";

require "connect.php";

$sql = 'SELECT * form `exercice_caminotv`';

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>

<body>
    <?php foreach ($result as $item) {
    ?>
        <div class="card">
            <h5 class="card-header">Item <?= $item['id'] ?></h5>
            <div class="card-body">
                <h5 class="card-title">Titre de l'élément</h5>
                <input type="text" class="card-text"><a href="edit.php?id=<?= $item['id'] ?>">Modifier</a></p>
                <div>
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Afficher l'élément <?php $item['id'] ?></label>
                </div>
                <a href="delete.php?id=<?= $item['id'] ?>">Supprimer</a>
            </div>
        </div>
    <?php
    } ?>
    <a href="CRUD/add.php">Ajouter</a>
</body>