<!DOCTYPE html>
<html lang="fr">
<?php 
require_once('../controller/function.php');
require_once('../controller/medecin.php');
require_once('../controller/patient.php');
$pat=new patient();
$med=new medecin();
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
            <a href="ajoutpatient.php">ajout</a>
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
                <?php
                $a=verification()[0];
                $b=verification()[1];
                ?>
                <input type="submit" id="envoyer" value="envoyer" onclick="verif1()">
            </form>
    </div>
    <p id="logo">starlike</p>
</body>
<script>
    let ml=[];
    let mdpa=[];
    let i;
    let mai=document.getElementById("mail");
    let md=document.getElementById('mdp');
    let error=document.getElementById('error');
    let erreur=document.getElementById('erreure');
    <?php $a=$med->tablemed();?>
    <?php foreach($a as $cles=>$valeur):?>
        i=<?php echo $cles?>;
        ml[i]="<?php echo $med->getemail($valeur)?>";
        mdpa[i]="<?php echo $med->getmdp($valeur)?>";
    <?php endforeach?>

    function verif(a,b){
        error.innerText=null
        u=1
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
                erreur.innerText="identifiant incorrecte"
            }
            else{
                erreur.innerText="mot de pasee incorrecte"
            }
        }
        else{
            md.classList=null
        }
        if(u==0){
            event.preventDefault();
        }
    }
    function verif1(){
    t[0]=0; 
    t[1]=0;
    for(let m=0;m<=i;m++){
        if(mai.value==ml[m]){
            t[0]=1
            if(md.value==mdpa[m]){
                t[1]=1
            }
        }
    }
    verif(t[0],t[1])
}
</script>
<script src="../public/javascript/connexion.js"></script>
</html>