<?php
 require_once('../controller/patient.php');
 require_once('../controller/image.php');

    $image=new image();
     if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){
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
                        $image->ajoutimage(basename($_FILES['image']['name']));
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
 ?>