<?php 
require_once "dbconnect.php" ;
$sql = "SELECT id_patient,prenom,nom,naissance FROM patient WHERE id_patient=id_patient";
$stmt= $conn -> query($sql);
$rowAll= $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles5.css">
      <!-- ----------------------------------------------------------------------------------------------  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
        <a href="patient.php"><i class='far fa-calendar-alt' style='font-size:16px'></i> liste patients</a>
        <span class="deconnect">
            <a href=""><i class="fa fa-cog" style="font-size:16px"></i> Déconnection</a>
        </span>
    </div>
        <!-- button modal formulaire ajouter medecin , secretaire ,   -->
      <div class="container">

        <div class="buttonrv">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class='fas fa-plus'></i> Ajouter Patient</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un patient</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <!-- modal formulaire ajouter -->
                    <form action="patientform.php" method="POST">
                    <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Nom:</label>
                                    <input type="text" class="form-control" name="nom" id="recipient-name">
                                    <!-- Validation feedback coté serveur  -->
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                    <!-- End Validation Feedback  -->
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">prenom:</label>
                                    <input type="text" class="form-control" name="prenom" id="recipient-name" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">naissance</label>
                                    <input type="date" class="form-control" name="date"  id="recipient-name" require >
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--container table rendez-vous  -->
    <div class="container">
       
        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th class="col-lg-1">ID</th>
                    <th class="col-sm-2">Nom</th>
                    <th class="col-sm-2">Prenom</th>
                    <th class="col-sm-3">naissance</th>
                    <th class="col-sm-1">Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rowAll as $row ){?>
        <tr>
            <th scope="row"><?php echo $row['id_patient']; ?></th>
            <td><?php echo $row['prenom'];?></td>
            <td><?php echo $row['nom'];?></td>
            <td><?php echo $row['naissance'];?></td>
            <td><a href="patientform.php?delete=<?php echo $row['id_patient']; ?>"
             class="btn btn-danger btn-sm">supprimer</a></td>
        </tr>
<?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>