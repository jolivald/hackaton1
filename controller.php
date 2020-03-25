<?php

// CONNEXTION A LA BDD

$dsn = 'mysql:host=localhost;dbname=insertion_sql';
$user = '';
$mdp = '';

try {
    $bdd = new PDO($dsn,$user,$mdp);
    echo 'BDD connectée'. '<br>'.'<br>'.'<br>';
} catch ( PDOException $E) {
    echo 'erreur de type = '.$E;
}

// Reception Des Données GET

$identifiant_num = $_GET['']; //Entre le nom attribué dans votre champs Form
$name = $_GET['orlando']; //Entre le nom attribué dans votre champs Form
$validation_key= $_GET['']; //Entre le nom attribué dans votre champs Form


//nom en BDD

$name ='name';
$Val_Num = 'identifiant_num';
$Val_key ='validation_key';

// Controlle avec la BDD


$rs_select = $bdd->query("SELECT * FROM user");



while($d = $rs_select->fetch(PDO::FETCH_ASSOC))
{
    echo $d[$name].'<br>';
    echo $d[$Val_Num].'<br>';
    echo $d[$Val_key].'<br>';
    echo '----------------- '.'<br>';
}





