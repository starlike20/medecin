<!DOCTYPE html>
<html lang="fr">
<?php 
require_once('../controller/function.php');
require_once('../controller/medecin.php');
require_once('../controller/patient.php');
require_once('../controller/image.php');
$image=new image;
$medecin=new medecin;
session_start();
$_SESSION['id']="1";
$id=$_SESSION['id'][0];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../public/css/connexion.css">
</head>
<body>
    <div id="description">
        <?php if($medecin->getidimage($id)==0):?>
            <p class="profil">
                <?php echo $medecin->getnom($id)[0];
                    echo $medecin->getprenom($id)[0];
                ?>
            </p>
        <?php else:?>
            <img src="../public/image/<?php echo $image->getnom($medecin->getidimage($id))?>">
        <?php endif?>
        <h1> bienvenue sur votre profil </h1>
        <h2>vous pouvez consulter ,modifier</h2>
        <p>vos information quand vous le souhaitez</p>
    </div>
    <div id="connec">
    <h1 id="title">profil</h1>
        <form action="connextion.trait.php" method="POST">
            <div class="m">
                <input type="text" name="nom" id="nom" value="<?php echo $medecin->getnom($id)?>">
            </div>
            <div class="m">
                <input type="text" name="prenom" id="prenom" value="<?php echo $medecin->getprenom($id)?>">
            </div>
            <div class="m">
                <input type="text" name="mail" id="mail" placeholder="e-mail" value="<?php echo $medecin->getemail($id)?>">
            </div>
            <div class="m">
                <input type="password" name="mdp" id="mdp" placeholder="password" value="<?php echo $medecin->getmdp($id)?>">                
            </div>
            <input type="submit" id="enregistré" value="enregistré">
        </form>
</body>
<style>
    .profil{
        background-color: rgb(<?php echo rand(150,255) ?>, <?php echo rand(150,255) ?>, <?php echo rand(150,255) ?>);
    }
</style>
</html>