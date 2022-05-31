<?php
    require_once('../controller/medecin.php');
    require_once('../controller/patient.php');
    require_once('../controller/image.php');
    $med=new medecin();
    $image=new image();

    function verification(){
        global $med;
        if(!empty($_POST) && isset($_POST)){
            $mail=$_POST['mail'];
            $mdp=$_POST['mdp'];
            $n=$med->tablemed();
            $t[0]=0; 
            $t[1]=0;
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
    function traiteimage(){
        global $image;
        global $_FILES;
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            return 1;
        // Testons si le fichier n'est pas trop gros
            if ($_FILES['image']['size'] <= 500000000000)
            {
                    // Testons si l'extension est autorisée
                    $fileInfo = pathinfo($_FILES['image']['name']);
                    // print_r($fileInfo);
                    // die();
                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                    if (in_array($extension, $allowedExtensions))
                    {
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES['image']['tmp_name'], '../public/image/' . basename($_FILES['image']['name']));
                            echo "L'envoi a bien été effectué !";
                            $image->ajoutimage($_FILES['image']['name']);
                            $o=$image->tableimg();
                            foreach($o as $cles=>$valeur){
                            $i=$valeur;
                            }
                        return $i;
                            
                    }
                    else{
                        return 0;
                    }
            }
        }
    }
?>