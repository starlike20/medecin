<?php 
    require_once('connexionbd.php');
    class medecin{
        public function __construct(){//instancie le constructeur vide
        }
        //je definie avec des fonction tout les operation possibel avec la bd
        public function getnom($i){//avoir le nom en fonction de l'id
            global $connexion;
            $requet="SELECT`nom` FROM `medecin`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['nom'];
            }
            return $t;
        }
        public function getprenom($i){//avoir le prenom en fonction de l'id
            global $connexion;
            $requet="SELECT`prenom` FROM `medecin`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['prenom'];
            }
            return $t;
        }
        public function getemail($i){//avoir le mail en fonction de l'id
            global $connexion;
            $requet="SELECT`e-mail` FROM `medecin`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['e-mail'];
            }
            return $t;
        }
        public function getmdp($i){//avoir le mot de passe en fonction de l'id
            global $connexion;
            $requet="SELECT`mdp` FROM `medecin`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['mdp'];
            }
            return $t;
        }
        public function getidimage($i){//avoir l'id de l'image en fonction de l'id
            global $connexion;
            $requet="SELECT`id_image` FROM `medecin`Where `id`=".$i."";
            $result= $connexion->query($requet);
            $t[0]=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_image'];
            }
            return $t;
        }
        public function ajoutemedecin($nom,$prenom,$mail,$mdp){//ajouter un medecin
            global $connexion;
            $requet="INSERT INTO `medecin`(`id`, `nom`, `prenom`, `e-mail`, `mdp`)
            VALUES('".$nom."','".$prenom."','".$mail."','".$mdp."')";
            $result= $connexion->query($requet);
        }
        public function suprimemedecin($i){// suprimer un medecin en fonction de sont id
            global $connexion;
            $requet="DELETE  FROM `medecin` WHERE `id`='".$i."'";;
            $result=$connexion->query($requet);
        }
        public function modifimedecin($i,$nom,$prenom,$mail,$mdp){ //modifie un medecin en fonction de sont id
            global $connexion;
            if($nom!=$this->getnom($i)){
                $requet="UPDATE `medecin` set `nom`='".$nom."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($prenom!=$this->getprenom($i)){
                $requet="UPDATE `medecin` set `prenom`='".$prenom."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($mail!=$this->getemail($i)){
                $requet="UPDATE `medecin` set `e-mail`='".$mail."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($mdp!=$this->getmdp($i)){
                $requet="UPDATE `medecin` set `mdp`='".$mdp."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
        public function tablemed(){//retourne un tableau de id
            global $connexion;
            $requet="SELECT * FROM `medecin`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $t;
        }
    }
?>