<?php

// CONNEXTION A LA BDD

$dsn = 'mysql:host=localhost;dbname=insertion_sql;charset=utf8';
$user = 'alaji';
$mdp = 'alaji';

try {
    $bdd = new PDO($dsn,$user,$mdp);
    echo 'BDD connectée'. '<br>'.'<br>'.'<br>';
} catch ( PDOException $E) {
    
    die('erreur de type = '.$E);
}

// Reception Des Données POST

$identifiant_num = $_POST['']; //Entre le nom attribué dans votre champs Form
$ReqName = $_POST['']; //Entre le nom attribué dans votre champs Form
$validation_key= $_POST['']; //Entre le nom attribué dans votre champs Form


//nom en BDD

$BDD_name ='name';
$Val_Num = 'identifiant_num';
$Val_key ='validation_key';

// Controlle avec la BDD


$rs_select = $bdd->prepare("SELECT * FROM user WHERE name=?");
$rs_select-> execute (array($ReqName));

 
    $d = $rs_select->fetch(PDO::FETCH_OBJ);
    
        if($ReqName == $d->name)
        {
            

            if($identifiant_num == $d->$Val_Num && $validation_key == $d->$Val_key)
            {
                
                setcookie($d->id,$d->name, time()+ 3600 * 24 *365);
                header('Location: index.php?IdValid=1');
                
            }

            else
            {
                
                header('Location: index.php?IdValid=0');
            }

        }
        
        else
        {
            
            header('Location: index.php?IdValid=0');
        }
        
    

 







