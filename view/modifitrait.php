<?php
 require_once('../controller/patient.php');
 require_once('../controller/image.php');
 session_start();
 $id=$_SESSION['id'];
 $patient=new patient;
 $image=new image;
 $nom=$_POST['nom'];
 $id_p=$_GET['id'];
 $prenom=$_POST['prenom'];
 $mail=$_POST['mail'];
 $année=$_POST['année'];
 $mois=$_POST['mois'];
 $jour=$_POST['jour'];
 $taille=$_POST['taille'];
 $poid=$_POST['poid'];
 $année=strval($année);
 $mois=strval($mois);
 $jour=strval($jour);
 $t=['janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre'];
 foreach($t as $clas=>$valeur){
    if($mois==$valeur){
        $moi=$clas+1;
    }
 }
 $ans=$année."-".$moi."-".$jour;
 echo($ans);
 // On peut valider le fichier et le stocker définitivement
 if(!empty($_FILES['image']) && isset($_FILES['image'])){
    if(basename($_FILES['image']['name'])!=null){
        move_uploaded_file($_FILES['image']['tmp_name'], '../public/image/' . basename($_FILES['image']['name']));
        echo basename($_FILES['image']['name']);
        $o=$image->tableimg();
        $image->ajoutimage(basename($_FILES['image']['name']));
        foreach($o as $cles=>$valeur){
        $i=$valeur;
        }
        echo $i;
    }
    else{
        $i=0;
    }
     }
else{
    $i=0;
}
$a=$patient->tablepat();
$patient->modifie($id_p,$nom,$prenom,$mail,$ans,$poid,$taille,$id,$i);
header('location:listing.php');
?>