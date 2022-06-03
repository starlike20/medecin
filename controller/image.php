<?php 
    require_once('connexionbd.php');
    class image{
        public function __construct(){//instancie le constructeur vide
        }
        public function getnom($i){ //avoir le nom en fonction du id
            global $connexion;
            $requet="SELECT`nom` FROM `image`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['nom'];
            }
            return $t;
        }
        public function ajoutimage($nom){//ajouter un patient
            global $connexion;
            $requet="INSERT INTO `image` (`nom`) 
            VALUES('".$nom."')";
            $connexion->query($requet);
        }
        public function tableimg(){//retourne un tableau de id
            global $connexion;
            $requet="SELECT * FROM `image`";
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