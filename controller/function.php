<?php
    require_once('medecin.php');

    $med=new medecin();

    function verification(){
        global $med;
        if(!empty($_POST) && isset($_POST)){
            $mail=$_POST['mail'];
            $mdp=$_POST['mdp'];
            $n=$med->tablemed();
            $t=[0,0]; 
            foreach($n as $cles=>$valeur){
                if($mail==$med->getemail($valeur)){
                    $t[0]=1;
                    if($mdp==$med->getmdp($valeur)){
                        $t[1]=1;
                        $t[2]=$valeur;
                    }
                }
            }
            return $t;
        }
        else{
            return $t=[0,0];
        }
    }
?>