<?php 
    require_once('connexionbd.php');
    class patient{
        public function __construct(){//instancie le constructeur vide
        }
        public function getnom($i){ //avoir le nom en fonction du id
            global $connexion;
            $requet="SELECT`nom` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['nom'];
            }
            return $t;
        }
        public function getprenom($i){//avoir le prenom en fonction du id
            global $connexion;
            $requet="SELECT`prenom` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['prenom'];
            }
            return $t;
        }
        public function getmail($i){//avoir le mail en fonction du id
            global $connexion;
            $requet="SELECT`e-mail` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['e-mail'];
            }
            return $t;
        }
        public function getdatedenai($i){//avoir la date de naissance en fonction du id
            global $connexion;
            $requet="SELECT`date de naissance` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['date de naissance'];
            }
            return $t;
        }
        public function getpoid($i){ //avoir le poid en fonction du id
            global $connexion;
            $requet="SELECT`poid` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['poid'];
            }
            return $t;
        }
        public function gettaille($i){ //avoir la taille en fonction du id
            global $connexion;
            $requet="SELECT`taille` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['taille'];
            }
            return $t;
        }
        public function getidme($i){//avoir l'id du medecin en fonction de l'id
            global $connexion;
            $requet="SELECT`id_medecin` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_medecin'];
            }
            return $t;
        }
        public function getid_image($i){//avoir l'id de l'image en fonction de l'id
            global $connexion;
            $requet="SELECT`id_image` FROM `patient`Where `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_image'];
            }
            return $t;
        }
        public function getidpat($id_med){ //avoir l'id tu patient en fonction de l'id du medecin
            global $connexion;
            $requet="SELECT `id` FROM `patient` WHERE `id_medecin`=".$id_med."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $t;
        }
        public function ajoutpatient($nom,$prenom,$mail,$dtdenais,$poid,$taille,$id_med){//ajouter un patient
            global $connexion;
            $requet="INSERT INTO `patient`(`nom`, `prenom`, `e-mail`, `date de naissance`, `poid`, `taille`, `id_medecin`)
            VALUES('".$nom."','".$prenom."','".$mail."','".$dtdenais."','".$poid."','".$taille."','".$id_med."')";
            $result= $connexion->query($requet);
        }
        public function supprimepatient($i){
            global $connexion;
            $requet="DELETE  FROM `patient` WHERE `id`='".$i."'";;
            $result=$connexion->query($requet);
        }
        public function modifie($i,$nom,$prenom,$mail,$dtdenais,$poid,$taille){
            global $connexion;
            if($nom!=$this->getnom($i)){
                $requet="UPDATE `patient` set `nom`='".$nom."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($nom!=$this->getprenom($i)){
                $requet="UPDATE `patient` set `prenom`='".$prenom."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($nom!=$this->getmail($i)){
                $requet="UPDATE `patient` set `e-mail`='".$mail."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($nom!=$this->getdatedenai($i)){
                $requet="UPDATE `patient` set `date de naissance`='".$dtdenais."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($nom!=$this->getpoid($i)){
                $requet="UPDATE `patient` set `poid`='".$poid."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($nom!=$this->gettaille($i)){
                $requet="UPDATE `patient` set `taille`='".$taille."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
        public function tablepat(){//retourne un tableau de id
            global $connexion;
            $requet="SELECT * FROM `patient`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $t;
        }

    }