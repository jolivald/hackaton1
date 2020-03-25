<?php 
if (!isset($_COOKIE[1])&&!isset($_COOKIE[2])&&!isset($_COOKIE[3])&&!isset($_COOKIE[4]))
{
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation aboutie</title>

<!--Eventuelle CSS / Pourquoi ne pas rajouter animation sur H1 ?

<style>
.titre
{
    display:flex;
    justify-content:space-around;
    align-items:center;
}
.titre2
{
    display:flex;
    justify-content:space-around;
    align-items:center;
}
</style>
-->
</head>

<body>
    <h1 class="titre"> Merci ! </h1>
    <h3 class="titre2"> Vous avez tous réussi. </h3> 
</body>
</html>



