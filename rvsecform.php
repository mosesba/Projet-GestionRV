<?php
session_start();
/*echo "<pre>";
var_dump($_POST);
die();
*/

//echo $_POST['valider'];

if (isset($_POST['submit'])) {


        $birthday = date("Y-m-d", strtotime($_POST['date']));
        $stime = $_POST['stime'];
        $etime = $_POST['etime'];
        $docteur = $_POST['docteur'];
        $patient = trim($_POST['patient']);
        $service = $_POST['services'];



        //insert dans la base de donnée
        require_once 'dbconnect.php';
        // insert data into database  

        $id_service = (int) $_POST['services'];
        $id_medecin = (int) $_POST['docteur'];
        $id_patient = (int) $_POST['patient'];

        $sql = $conn->prepare(
                'INSERT INTO rendez_vous  ( date,heure_debut,heure_fin,id_medecin,id_patient,id_service   )
            VALUES(:date,:heure_debut,:heure_fin,:id_medecin,:id_patient,:id_service )'
        );

        $sql->bindParam(':date', $_POST['date']);
        $sql->bindParam(':heure_debut', $_POST['stime']);
        $sql->bindParam(':heure_fin', $_POST['etime']);
        $sql->bindParam(':id_medecin', $id_medecin);
        $sql->bindParam(':id_patient', $id_patient);
        $sql->bindParam(':id_service', $id_service);

        $sql->execute();
        $_SESSION['success'] = "record has been saved";
        header("location: rvsecretaire.php");
}
/**
 *  Delete on table treatment
 */

if (isset($_GET['delete'])) {

        $id = $_GET['delete'];
        require_once 'dbconnect.php';



        $sql = "DELETE FROM rendez_vous WHERE id_rv= $id";
        $sql = $conn->prepare($sql);
        $sql->bindParam(':id_rv', $_GET['delete'], PDO::PARAM_INT);
        $sql->execute();
        // notification session
        $_SESSION['success'] = "record has been saved";



        header("location: rvsecretaire.php");
}
