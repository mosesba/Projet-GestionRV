
<?php 
session_start();
require_once "dbconnect.php" ;
$sql = "SELECT p.nom, p.prenom, s.nom_service, m.prenom, r.heure_debut,r.heure_fin, r.date, r.id_rv FROM patient p, rendez_vous r, service s, medecin m
WHERE p.id_patient = r.id_patient AND r.id_service = s.id_service AND r.id_medecin = m.id_medecin ";
$stmt= $conn -> query($sql);
$rowAll= $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- ----------------------------------------------------------------------------------------------  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <!-- ----------------------------------------------------------------------------------------------  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!-- ----------------------------------------------------------------------------------------------  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <!-- ----------------------------------------------------------------------------------------------  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <!-- ----------------------------------------------------------------------------------------------  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
 <!-- ----------------------------------------------------------------------------------------------  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
 <!-- ----------------------------------------------------------------------------------------------  -->

    <title>rendez-vous Docteur</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <span class="avatar">
                <img src="img/user8-512.png" alt="" style="width:5rem ">
                <h4>Dr Ousmane</h4>
                <h5>Medecin</h5>
        </span>
        <a href="homemed.php"><em class="fa fa-home" style="font-size:16px"></em> Home</a>
        <a href="rvdocteur.php"><em class='far fa-calendar-alt' style='font-size:16px'></em> rendez-vous</a>
        <span class="deconnect">
            <a href=""><em class="fa fa-cog" style="font-size:16px"></em> Déconnection</a>
        </span>
    </div>

    <div class="container">
        <div class="notification">
            <!-- bouton de notification -->
            <button type="button" class="btn btn-primary">
             <em class="fas fa-bell"></em> <span class="badge badge-light">4</span>
            </button>
            <!-- fin bouton de notification -->
        </div>
        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th class="col-lg-1">ID</th>
                    <th class="col-sm-2">Nom</th>
                    <th class="col-sm-2">Prenom</th>
                    <th class="col-lg-2">Service</th>
                    <th class="col-lg-2">Docteur</th>
                    <th class="col-lg-1">Date</th>
                    <th class="col-lg-2">Heure debut</th>
                    <th class="col-lg-2">Heure fin</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach ($rowAll as $row ){?>
        <tr>
            <th scope="row"><?= $row['id_rv']; ?></th>
            <td><?= $row['nom'];?></td>
            <td><?= $row['prenom'];?></td>
            <td><?= $row['nom_service'];?></td>
            <td><?= $row['prenom'];?></td>
            <td><?= $row['date'];?></td>
            <td><?= $row['heure_debut'];?></td>
            <td><?= $row['heure_fin'];?></td>

            <td><a href="rvsecform.php?delete=<?= $row['id_rv']; ?>"
             class="btn btn-danger btn-sm">supprimer</a></td>
        </tr>
    <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>