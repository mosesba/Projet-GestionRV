<?php
session_start();
require_once "dbconnect.php";
$sql = "SELECT p.nom, p.prenom, s.nom_service, m.prenom, r.heure_debut,r.heure_fin, r.date, r.id_rv FROM patient p, rendez_vous r, service s, medecin m
WHERE p.id_patient = r.id_patient AND r.id_service = s.id_service AND r.id_medecin = m.id_medecin ";
$stmt = $conn->query($sql);
$rowAll = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles4.css">
    <!-- ----------------------------------------------------------------------------------------------  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- ----------------------------------------------------------------------------------------------  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- ----------------------------------------------------------------------------------------------  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- ----------------------------------------------------------------------------------------------  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <title>rendez-vous Secretaire</title>
</head>

<body>
    <!-- The sidebar menu -->
    <div class="sidebar">
        <span class="avatar">
            <img src="img/user8-512.png" alt="" style="width:5rem ">
            <h4>Abibatou <strong> Ndiaye</strong></h4>
            <h5>sécrétaire</h5>
        </span>
        <a href="homesecretaire.php"><i class="fa fa-home" style="font-size:16px"></i> Home</a>
        <a href="rvsecretaire.php"><i class='far fa-calendar-alt' style='font-size:16px'></i> rendez-vous</a>
        <a href="patient.php"><i class='far fa-calendar-alt' style='font-size:16px'></i> liste patient</a>
        <span class="deconnect">
            <a href=""><i class="fa fa-cog" style="font-size:16px"></i> Déconnection</a>
        </span>
    </div>
    <div class="buttonrv">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class='fas fa-plus'></i> Ajouter rendez-vous</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un rendez-vous</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <!-- modal formulaire ajouter -->
                    <form action="rvsecform.php" method="POST">
                        <div class="modal-body">

                            <div class="form-row">
                                <!-- select connect -->
                                <?php
                                $sql = "SELECT * FROM patient";
                                $result = $conn->query($sql);
                                ?>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Patient</label>
                                    <select class="form-control" name="patient" id="service">
                                        <?php
                                        foreach ($result as $row)
                                            if (!empty($row['nom']))
                                                echo "<option value='" . $row['id_patient'] . "'>"
                                                    . $row['prenom'] . " " . $row['nom'] . "</option>\n";
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Date rendez-vous:</label>
                                    <input type="date" class="form-control" name="date" id="recipient-name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Heure de debut:</label>
                                    <input type="time" class="form-control" name="stime" min="07:00" id="recipient-name" require>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Heure de fin:</label>
                                    <input type="time" class="form-control" name="etime" min="07:15" id="recipient-name" require>
                                </div>
                                <!-- select connect -->
                                <?php
                                $sql = "SELECT * FROM service";
                                $result = $conn->query($sql);
                                ?>

                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Services</label>
                                    <select class="form-control" name="services" id="service">
                                        <?php
                                        foreach ($result as $row)
                                            if (!empty($row['nom_service']))
                                                echo "<option value='" . $row['id_service'] . "'>"
                                                    . $row['nom_service'] . " </option>\n";
                                        ?>
                                    </select>
                                </div>
                                <!-- medecin connect -->
                                <?php
                                $sql = "SELECT * FROM medecin";
                                $result = $conn->query($sql);
                                ?>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Docteurs</label>
                                    <select class="form-control" name="docteur" id="exampleFormControlSelect1">
                                        <?php
                                        foreach ($result as $row)
                                            if (!empty($row['nom']))
                                                echo "<option value='" . $row['id_medecin'] . "'>"
                                                    . $row['prenom'] . " " . $row['nom'] . "</option>\n";
                                        ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--container table rendez-vous  -->
    <div class="container">
        <div class="notification">
            <!-- bouton de notification -->

            <!-- fin bouton de notification -->
        </div>
        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th class="col-lg-1">ID</th>
                    <th class="col-sm-2">Nom</th>
                    <th class="col-sm-2">Prenom</th>
                    <th class="col-sm-2">Service</th>
                    <th class="col-sm-2">Docteur</th>
                    <th class="col-sm-1">Date</th>
                    <th class="col-sm-1">Heure debut</th>
                    <th class="col-sm-1">Heure fin</th>
                    <th class="col-sm-1">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rowAll as $row) { ?>
                    <tr>
                        <th scope="row"><?= $row['id_rv']; ?></th>
                        <td><?= $row['nom']; ?></td>
                        <td><?= $row['prenom']; ?></td>
                        <td><?= $row['nom_service']; ?></td>
                        <td><?= $row['prenom']; ?></td>
                        <td><?= $row['date']; ?></td>
                        <td><?= $row['heure_debut']; ?></td>
                        <td><?= $row['heure_fin']; ?></td>

                        <td><a href="rvsecform.php?delete=<?= $row['id_rv']; ?>" class="btn btn-danger btn-sm">supprimer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
        if (isset($_SESSION['success'])) {
            ?>
            <div class='success' role='alert'>

                <?= $_SESSION['success']; ?>
            </div>
        <?php } ?>

    </div>


</body>

</html>