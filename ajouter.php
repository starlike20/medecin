<!DOCTYPE html>
<?php require_once('controller/function.php');
require_once('controller/medecin.php');
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./public/css/ajouter.css">
    <title>acceuille</title>
</head>
<body>
    <div>
        <div id="form">
            <p>ajouter un patient</p>
            <form>
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <input type="text" name="mail" placeholder="e-mail">
                <input type="date" name="date" placeholder="date de naissance">
                <input type="text" name="poid" placeholder="poid">
                <input type="text" name="taille" placeholder="taille">
                <input type="submit" value="ajouter">
            </form>
        </div>
    <div>
</body>
</html>