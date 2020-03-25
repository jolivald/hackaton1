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

// CONTROLLE DU FORMULAIRE
