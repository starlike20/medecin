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
        <h1> bienvenue sur </h1>
        <h2> page d'ajout d'un patient </h2>
        <p>veillez entrez les information relative a votre patient</p>
        <p>a fin de facilité la gestion</p>
    </div>
    <div id="connec">
        <h1 id="title">ajout des patient</h1>
            <form action="connextion.trait.php" method="POST" enctype="multipart/form-data">
                <div class="m">
                    <input type="text" name="nom" id="nom" placeholder="nom">
                </div>
                <div class="m">
                    <input type="text" name="prenom" id="prenom" placeholder="prenom">
                </div>
                <div class="m">
                    <input type="text" name="mail" id="mail" placeholder="mail">
                </div>
                <div class="m" id="date">
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
                <div class="m">
                    <input type="text" name="taille" id="taille" placeholder="taille">
                </div>
                <div class="m">
                    <input type="text" name="poid" id="poid" placeholder="poid">
                </div>
                <div class="m">
                    <input type="file" name="image" id="image" placeholder="image" onchange=" verfimg(<?php echo traiteimage()?>)">
                </div>
                <input type="submit" id="envoyer" value="envoyer">
            </form>
    </div>
</body>
<script src="../public/javascript/ajouter.js"></script>
</html>