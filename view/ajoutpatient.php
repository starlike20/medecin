<!DOCTYPE html>
<html lang="fr">
<?php 
require_once('../controller/function.php');
require_once('../controller/medecin.php');
require_once('../controller/patient.php');
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../public/css/connexion.css">
    <link rel="stylesheet"  href="../public/css/ajouter.css">
</head>
<body>
    <?php if(empty($_SESSION)){
            header('location:./connexion.php');
        }
        ?>
    <header>
        <p id="p">starlike</p>
        <nav>
            <a href="connexion.php">connexion</a>
            <a href="listing.php">listing</a>
            <a href="ajoutpatient.php"id="la">ajout</a>
            <a href="profil.php">profil</a>
        </nav>
    </header>
    <div id="description">
        <h1> bienvenue sur </h1>
        <h2> page d'ajout d'un patient </h2>
        <p>veillez entrez les information relative a votre patient</p>
        <p>a fin de facilité la gestion</p>
    </div>
    <div id="connec">
        <h1 id="title">ajout des patient</h1>
            <form action="ajoutetrait.php" method="POST" enctype="multipart/form-data">
                <div class="m">
                    <div>
                        <input type="text" name="nom" id="nom" placeholder="nom" size="50">
                    </div>
                    <div>
                        <input type="text" name="prenom" id="prenom" placeholder="prenom" size="50">
                    </div>
                </div>
                <div class="m">
                    <div>
                        <input type="text" name="mail" id="mail" placeholder="mail" size="50">
                        <p id="error"></p>
                    </div>
                    <div id="date">
                        <select name="année" id="année" onchange="getyear()">
                            <option>choisir une année</option>
                        </select>
                        <select name="mois" id="mois" onchange="getmois()">
                            <option valeur="13">choisir un mois</option>
                            <option valeur="0">janvier</option>
                            <option valeur="1">fevrier</option>
                            <option valeur="2">mars</option>
                            <option valeur="3">avril</option>
                            <option valeur="4">mai</option>
                            <option valeur="5">juin</option>
                            <option valeur="6">juillet</option>
                            <option valeur="7">aout</option>
                            <option valeur="8">septembre</option>
                            <option valeur="09">octobre</option>
                            <option valeur="10">novembre</option>
                            <option valeur="11">decembre</option>
                        </select>
                        <select name="jour" id="jour">
                            <option>choisir un jour</option>
                        </select>
                    </div>
                </div>
                <div class="m">
                    <div>
                        <input type="text" name="taille" id="taille" placeholder="taille" size="5">
                        <p id="error-taille"></p>
                    </div>
                    <div>
                        <input type="text" name="poid" id="poid" placeholder="poid" size="5">
                        <p id="error-poid"></p>
                    </div>
                </div>
                <div class="m">
                    <input type="file" name="image" id="image" placeholder="image" onchange="verifimage()">
                    <p id="errorr"></p>
                </div>
                <input type="submit" id="envoyer" value="envoyer" onclick="verificationtous()">
                <p id="errou"></p>
            </form>
    </div>
</body>
<script src="../public/javascript/ajouter.js"></script>
</html>