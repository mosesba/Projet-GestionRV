<?php
/** 
 *  Save into database and display on table stament
 */

if (isset($_POST['submit'])) {
   
   
    if (empty($_POST['prenom'])) {
            $error= "Le champs prenom est vide";
            header("location: patient.php?error=$error");
    } elseif (empty($_POST['nom'])) {
            $error= "Le champs prénom est vide";
            header("location: patient.php?error=$error");
    } elseif (empty($_POST['date'])) {
            $error= "Le champs birh est vide";
            header("location: patient.php?error=$error");
    } else {

        $pre= trim($_POST['prenom']);
        $name= trim($_POST['nom']);
        $birthday= trim($_POST['date']);
       
     
        // Gestion du nom et prénom 
        if (!preg_match("/^[a-zA-Z ]*$/", $pre)) {
                 $error = "Le nom ne doit contenir que des lettres et des espaces";
                 header("location: patient.php?error=$error");
        } else {
            $prenom = $pre; // variable nom à insérer dans le fichier
        } 
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error = "Le prénom ne doit contenir que des lettres et des espaces";
            header("location: patient.php?error=$error");
        } else {
            $nom = $name; // variable prenom à insérer dans le fichier
        }
         
        //insert dans la base de donnée
        require_once 'dbconnect.php';
        // insert data into database    


            $sql = $conn->prepare('INSERT INTO patient (prenom, nom, naissance )
            VALUES(:prenom,:nom,:naissance)'
            );
                    $sql->bindParam(':prenom', $_POST['prenom']);
                    $sql->bindParam(':nom', $_POST['nom']);
                    $sql->bindParam(':naissance', $_POST['date']);

            $sql->execute();

            header ("location: patient.php"); 
            
        
    }
}

/**
 *  Delete on table treatment
 */



if(isset($_GET['delete'])) {
    $id=$_GET['delete'];
    require_once 'dbconnect.php';

    $sql = "DELETE FROM patient WHERE id_patient = $id";
    $sql = $conn->prepare($sql);
    $sql->bindParam(':id_patient', $_GET['delete'], PDO::PARAM_INT);   
    $sql->execute();
// notification session
    $_SESSION['message'] = "record has been saved";
    $_SESSION['msg_type'] = "danger";

    header ("location: patient.php");
}



?>