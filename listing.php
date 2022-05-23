<!DOCTYPE html>
<?php require_once('controller/function.php');
require_once('controller/medecin.php');
require_once('controller/patient.php');
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <nav>
            <a href="connexion.php">connexion</a>
            <a href="listing.php">listing</a>
            <a href="profil.php">profil</a>
        </nav>
    </header>
    <div>
        <p>liste des patients</p>
        <?php
        $patient=new patient();
        $n=$patient->tablepat();
        ?>
        <table>
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>date de naissance</th>
                <th>taille</th>
                <th>poid</th>
                <th>imc</th>
                <th>modification</th>
                <th>ajout</th>
                <th>supression</th>
            </tr>
            <?php foreach($n as $cles=>$valeur):?>
            <tr>
                <td><?php echo $patient->getnom($valeur) ?></td>
                <td><?php echo $patient->getprenom($valeur) ?></td>
                <td><?php echo $patient->getmail($valeur) ?></td>
                <td><?php echo $patient->getdatedenai($valeur) ?></td>
                <td id="taille"><?php echo $patient->gettaille($valeur) ?></td>
                <td id="poid"><?php echo $patient->getpoid($valeur) ?></td>
                <td id="imc"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php endforeach ?>
        </table>
                
    </div>
</body>
<script src="public/javascript/listing.js"></script>
<html>