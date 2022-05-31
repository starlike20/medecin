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
</head>
<body>
    <header>
        <p id="p">starlike</p>
        <nav>
            <a href="connexion.php" id="la">connexion</a>
            <a href="listing.php">listing</a>
            <a href="ajouter.php">ajout</a>
            <a href="profil.php">profil</a>
        </nav>
    </header>
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
                    <p id="error"></p>
                </div>
                <div class="m">
                    <input type="password" name="mdp" id="mdp" placeholder="password">
                    <p id="erreure"></p>
                </div>
                <div class="p">
                    <input type="checkbox" name="selection" id="selection">
                    <label for="selection" id="aficher">masquer</label>
                    <label for="selection" id="masque">afficher</label>
                </div>
                <input type="submit" id="envoyer" value="envoyer">
            </form>
    </div>
    <p id="logo">starlike</p>
    <?php if( isset($_SESSION)&& !empty($_SESSION) ):?>
        <?php if(!empty($_SESSION['id'])):?>
        <?php else:?>
            <script> 
                let error=document.getElementById('error')
                let erreure=document.getElementById('erreure')
                let mai=document.getElementById('mail')
                let md=document.getElementById('mdp')
                mai.value="<?php echo $_SESSION['user'][0];?>"
                md.value="<?php echo $_SESSION['user'][1];?>"
                function verif(a,b){
                    error.innerText=null
                    if(a==0){
                        mai.classList.add('fauxmail')
                        u=0

                    }
                    else{
                        mai.classList=null
                    }
                    if(b==0){
                        md.classList.add('fauxmotdepasse')
                        u=0
                        if(a==0){
                            erreure.innerText="identifiant incorrecte"
                        }
                        else{
                            erreure.innerText="mot de pasee incorrecte"
                        }
                    }
                    else{
                        md.classList=null
                    }
                }
                verif(<?php echo $_SESSION['connection'][0]?>,<?php echo $_SESSION['connection'][1]?>)
            </script>

        <?php endif?>
    <?php endif?>
</body>
<script src="../public/javascript/connexion.js"></script>
</html>