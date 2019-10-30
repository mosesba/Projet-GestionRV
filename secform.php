<?php
/**
 *  Save into database and display on table stament
 */


if (isset($_POST['submit'])) {
   
    if (empty($_POST['prenom'])) {
            $error= "Le champs est vide";
            header("location: adsecretaire.php?error=$error");
    } elseif (empty($_POST['nom'])) {
            $error= "Le champs prénom est vide";
            header("location: adsecretaire.php?error=$error");
    } elseif (empty($_POST['email'])) {
            $error= "Le champs est vide";
            header("location: adsecretaire.php?error=$error");
    } elseif (empty($_POST['tel'])) {
            $error= "Le champs est vide";
            header("location: adsecretaire.php?error=$error");
    } elseif (empty($_POST['passwd'])) {
            $error= "Le champs est vide";
             header("location: adsecretaire.php?error=$error");

    }else {

        $pre= trim($_POST['prenom']);
        $name= trim($_POST['nom']);
        $mail= trim($_POST['email']);
        $tel= trim($_POST['tel']);
        $password= trim($_POST['passwd']);
        $service=$_POST['services'];
     
        // Gestion du nom et prénom 
        if (!preg_match("/^[a-zA-Z ]*$/", $pre)) {
                 $error = "Le nom ne doit contenir que des lettres et des espaces";
                 header("location: adsecretaire.php?error=$error");
        } else {
            $prenom = $pre; // variable nom à insérer dans le fichier
        } 
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error = "Le prénom ne doit contenir que des lettres et des espaces";
            header("location: adsecretaire.php?error=$error");
        } else {
            $nom = $name; // variable prenom à insérer dans le fichier
        }
         // Gestion de l'email 
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error = "L'email entré n'est pas valide, veuillez reprendre";
            header("location: adsecretaire.php?error=$error");
        } else {
            $email = $mail; // email valide à inserer dans le fichier 
        }
         
        //insert dans la base de donnée
        require_once 'dbconnect.php';
        // insert data into database    
      
        $id_service = (int)$_POST['services'];


            $sql = $conn->prepare('INSERT INTO secretaire (prenom, nom, email, telephone, passwd, id_service)
            VALUES(:nom,:prenom,:email,:tel,:passwd,:id_service)'
            );
                    
                    $sql->bindParam(':prenom', $_POST['prenom']);
                    $sql->bindParam(':nom', $_POST['nom']);
                    $sql->bindParam(':email', $_POST['email']);
                    $sql->bindParam(':tel', $_POST['tel']);
                    $sql->bindParam(':passwd', $_POST['passwd']);
                    $sql->bindParam(':id_service', $id_service);
                    
            $sql->execute();

            header ("location: adsecretaire.php");       

        


         
      //  $sql->execute();
      
// notification session
        

     //   header ("location: adsecretaire.php");
        
    }
}

/**
 *  Delete on table treatment
 */

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    require_once 'dbconnect.php';

    
    $sql = "DELETE FROM secretaire WHERE  = $id";
    $sql = $conn->prepare($sql);
    $sql->bindParam(':id_secretaire', $_GET['delete'], PDO::PARAM_INT);   
    $sql->execute();
// notification session
    $_SESSION['message'] = "record has been saved";
    $_SESSION['msg_type'] = "danger";


    header ("location: adsecretaire.php");
}



?>