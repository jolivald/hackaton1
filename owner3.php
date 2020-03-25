<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ma banque</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hackaton.css">
</head>
<body>
    <h1>Monsieur Petrov</h1>
    <!--Formulaire-->
    <form action="Controller" method="POST">
        <fieldset>
            <legend><a>Formulaire de validation de la transaction: </a></legend>
            <!--Id numérique (entier 10 chiffres)-->
            <div>
                <label for="id"><a>Identifiant numérique:</a></label>
                <input type="number" min="10" max="10" name="id" placeholder="Entrez 10 chiffres" required>
            </div>
                <!--Name-->
            <div>
                <label for="name"><a>Nom:</a></label>
                <input type="text" name="name" placeholder="Entrez votre nom" required>
            </div>
            <!--Password-->
            <div>
                <label for="password"><a>Mot de passe:</a></label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
        </fieldset>
        <!--Submit-->
        <div class="bouton">
            <button type="submit"> Valider la transaction </button>
        </div>
    </form>
</body>
</html>
