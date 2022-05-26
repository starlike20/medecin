<!DOCTYPE html>
<html lang="fr">
<?php 
require_once('../controller/function.php');
require_once('../controller/medecin.php');
require_once('../controller/patient.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../public/css/connexion.css">
</head>
<body>
    <div id="description">
        <h1> bienvenue </h1>
        <p>veillez entrez vos information</p>
        <p>et commencez votre navigation</p>
    </div>
    <div id="connec">
        <h1 id="title">connexion</h1>
            <form action="connextion.trait.php" method="POST">
                <div class="m">
                    <input type="text" name="mail" id="mail" placeholder="e-mail">
                </div>
                <div class="m">
                    <input type="password" name="mdp" id="mdp" placeholder="password">
                </div>
                <div class="p">
                    <input type="checkbox" name="selection" id="selection">
                    <label for="selection" id="aficher">masquer</label>
                    <label for="selection" id="masque">afficher</label>
                </div>
                <?php
                $a=verification()[0];
                $b=verification()[1];
                ?>
                <input type="submit" id="envoyer" value="envoyer" onclick="verif(<?php echo $a?>,<?php echo $b?>)">
            </form>
    </div>
    <p id="logo">starlike</p>
</body>
<script src="../public/javascript/connexion.js"></script>
</html>