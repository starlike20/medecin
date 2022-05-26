<!DOCTYPE html>
<html lang="fr"><?php require_once('../controller/function.php');
require_once('../controller/medecin.php');
require_once('../controller/patient.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../public/css/listing.css">
</head>
<body>
    <?php
        $patient=new patient();
        $n=$patient->tablepat();
    ?>
    <header>
        <p id="p">starlike</p>
        <nav>
            <a href="connexion.php">connexion</a>
            <a href="listing.php" id="la">listing</a>
            <a href="ajouter.php">ajout</a>
            <a href="profil.php">profil</a>
        </nav>
    </header>
    <div id="block">
    </div>
    <div id="recherche">
            <div>
                <input type="text" placeholder="search">
                <img src="../public/image/loupe.png">
            </div>
        </div>
    <div id="patient">
        <?php $i=0 ?>
        <?php foreach($n as $cles=>$valeur):?>
            <div class="patients">
                <tr>
                    <td><img class="image" src="../public/image/patient_589302497_1000.jpg"></img></td>
                    <div class="information">
                        <td><div><?php echo $patient->getnom($valeur) ?></div></td>
                        <td><div><?php echo $patient->getprenom($valeur) ?></div></td>
                        <td><div><?php echo $patient->getmail($valeur) ?></div></td>
                        <td><div><?php echo $patient->getdatedenai($valeur) ?></div></td>
                        <td><div id="taille-<?php echo $valeur?>" class="taille"><?php echo $patient->gettaille($valeur) ?></div></td>
                        <td><div id="poid-<?php echo $valeur?>" class="poid"><?php echo $patient->getpoid($valeur) ?></div></td>
                        <td><div id="imc-<?php echo $valeur?>" class="imc"></div></td>
                        <td><div><a href="ajouter.php">ajouter</a></div></td>
                        <td><div><a href="modifier.php">modifier</a></div></td>
                        <td><div><a href="supprimer.php?id_patient=<?php echo $valeur?>">supprimer</a></div></td>
                        <?php $i++ ?>
                    </div>
                </tr>
            </div>
        <?php endforeach?>
    </div>
</body>
<style>
    #block{
        height:<?php echo 130*$i+500;?>px;
    }
</style>
<script src="../public/javascript/listing.js"></script>
</html>