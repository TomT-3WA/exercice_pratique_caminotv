<?php

try {
    // Connexion à la BDD
    $db = new PDO('mysql:host=localhost;dbname=exercice_caminotv', 'root', '');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    die();
}
