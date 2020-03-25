<?php

// CONNEXTION A LA BDD

$dsn = 'mysql:host=localhost;dbname=insertion_sql';
$user = '';
$mdp = '';

try {
    $bdd = new PDO($dsn,$user,$mdp);
    echo 'BDD connectée';
} catch ( PDOException $E) {
    echo 'erreur de type = '.$E;
}

// Reception Des Données GET

$identifiant_num = $_GET['']; //Entre le nom attribué dans votre champs Form
$name = $_GET['']; //Entre le nom attribué dans votre champs Form
$validation_key= $_GET['']; //Entre le nom attribué dans votre champs Form





