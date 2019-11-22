<?php
/**
 *  Save into database and display on table stament
 */
session_start();


if (isset($_POST['submit'])) {
   
    if (empty($_POST['service'])) {
            $error= "Le champs prénom est vide";
            header("location: adservice.php?error=$error");
    } else {

        $serv= trim($_POST['service']);
    
        // Gestion du nom et prénom 
        if (!preg_match("/^[a-zA-Z ]*$/", $serv)) {
                 $error = "Le nom ne doit contenir que des lettres et des espaces";
                 header("location: adservice.php?error=$error");
        } else {
            $service = $serv; // variable nom à insérer dans le fichier
        }
        //insert dans la base de donnée
        require_once 'dbconnect.php';
        // insert data into database

       // prepare sql and bind parameters
      
        $sql= $conn ->prepare("INSERT INTO service (nom_service) VALUES ( ? )");
      
        $sql->bindParam(1, $service);
       
        $sql->execute();
// notification session
        $_SESSION['message'] = "record has been saved";
        $_SESSION['msg_type'] = "success";

       header ("location: adservice.php");
        
    }
}

/**
 *  Delete on table treatment
 */

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    require_once 'dbconnect.php';

    
    $sql = "DELETE FROM service WHERE id_service = $id";
    $sql = $conn->prepare($sql);
    $sql->bindParam(':id_service', $_GET['delete'], PDO::PARAM_INT);   
    $sql->execute();
// notification session
    $_SESSION['message'] = "record has been saved";
    $_SESSION['msg_type'] = "danger";


    header ("location: adservice.php");
}




?>