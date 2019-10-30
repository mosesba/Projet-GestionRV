<?php
/**
 * 
 */

if (isset($_POST['submit'])) {
    if (empty($_POST['nom'])) {
            $error= "Le champs prénom est vide";
            header("location: admedecin.php?error=$error");
    } elseif (empty($_POST['prenom'])) {
            $error= "Le champs prénom est vide";
            header("location: admedecin.php?error=$error");
    } elseif (empty($_POST['email'])) {
            $error= "Le champs prénom est vide";
            header("location: admedecin.php?error=$error");
    } elseif (empty($_POST['tel'])) {
            $error= "Le champs prénom est vide";
            header("location: admedecin.php?error=$error");
    } else {

        $pre= trim($_POST['prenom']);
        $name= trim($_POST['nom']);
        $mail= trim($_POST['email']);
        $tel= trim($_POST['tel']);
        $specialite= $_POST['specialite'];
        $passwd= $_POST['passwd'];
       
        
        // Gestion du nom et prénom 
        if (!preg_match("/^[a-zA-Z ]*$/", $pre)) {
                 $error = "Le nom ne doit contenir que des lettres et des espaces";
                 header("location: admedecin.php?error=$error");
        } else {
                $prenom = $pre; // variable nom à insérer dans le fichier
        }
    
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $error = "Le prénom ne doit contenir que des lettres et des espaces";
                header("location: admedecin.php?error=$error");
        } else {
                $nom = $name; // variable prenom à insérer dans le fichier
        }
        // Gestion de l'email 
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

                $error = "L'email entré n'est pas valide, veuillez reprendre";
                header("location: admedecin.php?error=$error");
        } else {
                $email = $mail; // email valide à inserer dans le fichier 
        }  
        // Gestion du numéro de téléphone   
        /*
        if (Validate_Phone_number($phone) == true) {
                $phone = $tel; // numéro de téléphone à insérer dans le fichier
        } else {
                $error="Le numéro de téléphone n'est pas valide" ;
                header("location: admedecin.php?error=$error");
        }
*/
        //insert dans la base de donnée
        require_once 'dbconnect.php';

     // prepare sql and bind parameters
    
      $sql= $conn ->prepare("INSERT INTO medecin ( id_medecin , prenom , nom , email, telephone , speccialite, passwd , id_service) 
      VALUES ( ? , ? , ? , ? , ? , ? , ? , ? )");
    
      $sql->bindParam(1, $service);
     
      $sql->execute();
    

       

        
        
        


    }
}


?>