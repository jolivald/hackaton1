<?php
// ---------------------- CODE GET---------------------------------------
/* 
    0 ===> Erreur dans l identification
    1 ===> Identification reussi
    2 ===> Erreur de connexion a la BDD


*/

// CONNEXTION A LA BDD

$dsn = 'mysql:host=localhost;dbname=verif_transaction;charset=utf8'; //entrer votre config BDD
$user = 'alaji';    //entrer votre nom d'utilisateur
$mdp = 'alaji';     //entrer votre mot de pass

try {
    $bdd = new PDO($dsn,$user,$mdp);
    
} catch ( PDOException $E) {
        
        die( header('Location: index.php?IdValid=2'));
}

// -------------------------- Reception Des Données POST ------------------------------------

$identifiant_num = $_POST['id'];  //Entre le nom attribué dans votre champs Form
$ReqName = $_POST['name'];          //Entre le nom attribué dans votre champs Form
$validation_key= $_POST['password'];    //Entre le nom attribué dans votre champs Form


//-----------------------nom des colonnes BDD------------------------------------

$BDD_name ='name';
$Val_Num = 'identifiant_num';
$Val_key ='validation_key';

//---------------------------- Recuperation des données en BDD-------------------------------------

$rs_select = $bdd->prepare("SELECT * FROM user WHERE name=?");  // selection avec comme conditions le nom
$rs_select-> execute (array($ReqName));                         //Recuperation Grace au nom

 
        $d = $rs_select->fetch(PDO::FETCH_OBJ);
        
                if($ReqName == $d->name) //Verification si le nom existe
                {
                    

                        if($identifiant_num == $d->$Val_Num && $validation_key == $d->$Val_key) //Verification si la clé de validation et le numero d'identifiant sont correct
                        {
                            //Les données sont correct :

                            setcookie($d->id,$d->name, time()+ 3600 * 24 *365);     // création du cookie avec comme nom le ID et valeur le NAME
                            header('Location: index.php?IdValid=1');                // Renvoi vers index avec une validation sur 1 en GET
                            
                        }

                        else 
                        {
                            // les données sont incorrect :

                            header('Location: index.php?IdValid=0'); // Renvoi vers index avec une validation sur 0 en GET
                            
                        }

                }
                
                else
                {
                    // le name est inconnu
                    header('Location: index.php?IdValid=0'); // Renvoi vers index avec une validation sur 0 en GET
                }
                
    

 






