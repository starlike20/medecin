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
    <?php $n=$_GET['id']?>
    <div>
        <div id="form">
            <p>modifier</p>
            <form>
                <input type="text" name="nom" value="<?php echo $patient->getnom($n)?>">
                <input type="text" name="prenom" value="<?php echo $patient->getprenom($n)?>">
                <input type="text" name="mail" value="<?php echo $patient->getmail($n)?>">
                <input type="date" name="date" value="<?php echo $patient->getdatedenai($n)?>">
                <input type="text" name="poid" value="<?php echo $patient->getpoid($n) ?>">
                <input type="text" name="taille" value="<?php echo $patient->gettaille($n) ?>">
                <input type="submit" value="ajouter">
            </form>
        </div>
    <div>
</body>
</html>