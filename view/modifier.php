<!DOCTYPE html>
<html lang="fr">
<?php 
require_once('../controller/function.php');
require_once('../controller/medecin.php');
require_once('../controller/patient.php');
$patient=new patient;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../public/css/connexion.css">
    <link rel="stylesheet"  href="../public/css/ajouter.css">
</head>
<body>
    <?php $id=$_GET['id_patient'];
        ?>
    <header>
        <p id="p">starlike</p>
        <nav>
            <a href="connexion.php">connexion</a>
            <a href="listing.php">listing</a>
            <a href="ajoutpatient.php">ajout</a>
            <a href="profil.php">profil</a>
        </nav>
    </header>
    <div id="description">
        <?php if($patient->getid_image($id)==0):?>
            <p class="profil">
                <?php echo $patient->getnom($id)[0];
                    echo $patient->getprenom($id)[0];
                ?>
            </p>
        <?php else:?>
            <img src="../public/image/<?php echo $image->getnom($patient->getid_image($id))?>" class="profil">
        <?php endif?>
        <div>
            <h1> bienvenue sur </h1>
            <h2> page de mise a jous </h2>
            <p>veillez actualiser les informations relative a votre patient</p>
            <p>a fin de facilité la gestion</p>
        </div>
    </div>
    <div id="connec">
        <h1 id="title">mise a jour du patient <?php echo $patient->getnom($id)?></h1>
            <form action="modifitrait.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                <div class="m">
                    <div>
                        <input type="text" name="nom" id="nom" placeholder="nom" size="50" value="<?php echo $patient->getnom($id)?>">
                    </div>
                    <div>
                        <input type="text" name="prenom" id="prenom" placeholder="prenom" size="50" value="<?php echo $patient->getprenom($id)?>">
                    </div>
                </div>
                <div class="m">
                    <div>
                        <input type="text" name="mail" id="mail" placeholder="mail" size="50" value="<?php echo $patient->getmail($id)?>">
                        <p id="error"></p>
                    </div>
                    <div id="date">
                        <?php $a=$patient->getdatedenai($id)?>
                        <select name="année" id="année" onchange="getyear()">
                            <option><?php echo $a[0],$a[1],$a[2],$a[3] ?></option>
                            <option>choisir une année</option>
                        </select>
                        <select name="mois" id="mois" onchange="getmois()"?>">
                            <option valeur="13"><?php $b=$a[5].$a[6];
                            $t=['janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre'];
                            foreach($t as $clas=>$valeur){
                               if($b==$clas+1){
                                   $mois=$valeur;
                                   echo $mois;
                               }
                               } ?></option>
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
                            <option><?php echo $a[8],$a[9] ?></option>
                            <option>choisir un jour</option>
                        </select>
                    </div>
                </div>
                <div class="m">
                    <div>
                        <input type="text" name="taille" id="taille" placeholder="taille" size="5" value="<?php echo $patient->gettaille($id)?>">
                        <p id="error-taille"></p>
                    </div>
                    <div>
                        <input type="text" name="poid" id="poid" placeholder="poid" size="5" value="<?php echo $patient->getpoid($id)?>">
                        <p id="error-poid"></p>
                    </div>
                </div>
                <div class="m">
                    <input type="file" name="image" id="image" placeholder="image" onchange="verifimage()">
                    <p id="errorr"></p>
                </div>
                <input type="submit" id="envoyer" value="envoyer" onclick="verificationtouss()">
                <p id="errou"></p>
            </form>
    </div>
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
    </style>
</body>
<script src="../public/javascript/ajouter.js"></script>
</html>