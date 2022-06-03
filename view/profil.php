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
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../public/css/connexion.css">
</head>
<body>
    <?php if(empty($_SESSION)){
            header('location:./connexion.php');
        }
        $id=$_SESSION['id'][0]
        ?>
    <header>
        <p id="p">starlike</p>
        <nav>
            <a href="connexion.php">connexion</a>
            <a href="listing.php">listing</a>
            <a href="ajoutpatient.php">ajout</a>
            <a href="profil.php" id="la">profil</a>
        </nav>
    </header>
    <div id="description">
        <?php if($medecin->getidimage($id)==0):?>
            <p class="profil">
                <?php echo $medecin->getnom($id)[0];
                    echo $medecin->getprenom($id)[0];
                ?>
            </p>
        <?php else:?>
            <img src="../public/image/<?php echo $image->getnom($medecin->getidimage($id))?>" class="profil">
        <?php endif?>
        <div>
            <h1> bienvenue sur votre profil </h1>
            <h2>vous pouvez consulter ,modifier</h2>
            <p>vos information quand vous le souhaitez</p>
            <a id="deconnection" href="deconnection.php">deconnection</a>
        </div>
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
            <input type="submit" id="envoyer" value="enregistré">
        </form>
</body>
<style>
    .profil{
        background-color: rgb(<?php echo rand(150,255) ?>, <?php echo rand(150,255) ?>, <?php echo rand(150,255) ?>);
    }
    #description{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    #description div{
        position: absolute;
        top:400px
    }
    #deconnection{
        display: inline-block;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        margin-left: 100px;
        margin-top: 130px;
        height: 35px;
        width: 100px;
        color: rgb(0, 193, 157);
        background-color: white;
        border-radius: 15px;
        text-align: center;
        text-decoration: none;
    }
</style>
</html>