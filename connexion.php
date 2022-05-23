<!DOCTYPE html>
<?php require_once('controller/function.php');
require_once('controller/medecin.php');
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./public/css/connexion.css">
    <title>acceuille</title>
</head>
<body>
    <header>
        <nav>
            <a href="connexion.php">connexion</a>
            <a href="listing.php">listing</a>
            <a href="profil.php">profil</a>
        </nav>
    </header>
    <div id="block">
        <p>connexion</p>
        <form action="connextrait.php" method="POST">
            <div class="m">
                <span>mail:</span>
                <input type="text" name="mail" id="mail">
            </div>
            <div class="m">
                <span>mot de passe:</span>
                <input type="password" name="mdp" id="mdp">
            </div>
            <div class="p">
                <input type="checkbox" name="selection" id="selection">
                <label for="selection" id="aficher">afficher</label>
                <label for="selection" id="masque">masquer</label>
            </div>
            <input type="submit" id="envoyer" value="envoyer" onclick="verif(<?php echo verification()[0]?>,<?php echo verification()[1]?>)">
        </form>
    </div>
    <script src="public/javascript/connexion.js"></script>
</body>
</html>