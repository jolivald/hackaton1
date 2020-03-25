<!DOCTYPE html>
<html lang="fr">
<head>
<title>Ma banque</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="hackaton.css">
</head>
<body>
    <!--Formulaire-->
    <form action="Success" method="POST">
        <fieldset>
            <legend><a>Formulaire de validation de la transaction:</a></legend>

            <!--Id numérique (entier 10 chiffres)-->
            <div>
            <label for="Id"><a>Identifiant numérique:</a></label>
            <input type="number" name="id" name="id">
        </div>
            <div>
            <!--Name-->
            <label for="name"><a>Nom:</a></label>
            <input type="text" name="id" name="id">
        </div>
        <div>
            <!--Password-->
            <label for="password"><a>Mot de passe:</a></label>
            <input type="password" id="password" name="password">
        </div>
    </div>
            <!--Submit-->
            <div class="bouton">
                <button type="submit"> Valider la transaction </button></div>
        </fieldset>
    </form>
</body>
</html>
