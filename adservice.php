<?php 

require_once "dbconnect.php" ;
$sql = "SELECT id_service, nom_service FROM service";
$result= $conn->query($sql);
//parcourir tableau bd

/**
 * echo "<pre>";
*var_dump($data);
 *die();
 */

//foreach ($result as $row)
//echo $row['id_service']." ".$row['nom_service']."</br>\n";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles3.css">
        
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
    <title>Services Admin</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <span class="avatar">
                <img src="img/user8-512.png" alt="" style="width:5rem ">
                <h4>Admin</h4>
                <h5></h5>
        </span>

        <a href="admedecin.php"><i class="fa fa-briefcase-medical" style="font-size:16px"></i> medecins</a>
        <a href="adservice.php"><i class='far fa-wpforms' style='font-size:16px'></i> Services</a>
        <a href="adsecretaire.php"><i class='far fa-id-badge' style='font-size:16px'></i> Secretaire</a>
        <span class="deconnect">
            <a href="logoutadmin.php"><i class="fa fa-cog" style="font-size:16px"></i> Déconnection</a>
        </span>
    </div>

    <div class="container">
        <h1>Admin</h1>
        
        <!-- button modal formulaire ajouter medecin , secretaire ,   -->
        <div class="buttonrv">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class='fas fa-plus'></i> Ajouter service</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- modal formulaire ajouter -->
                          <!-- modal formulaire ajouter -->
                       <form action="servform.php" method="POST">
                        <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Id_service:</label>
                                        <input type="text" name="matricule" class="form-control" placeholder="M-001" id="recipient-name"readonly>
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
                                        <label for="recipient-name" class="col-form-label">Nom Service:</label>
                                        <input type="text" name="service" class="form-control" id="serviceid">
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
        <!-- End Modal formulaire ajouter button rv -->


        <!-- bouton de notification -->


          
        <!-- fin bouton de notification -->
    </div>
    <!-- table -->
    <table class="table">
        <thead>
            <tr>
                <th class="col-sm-4">ID</th>
                <th class="col-sm-6">Nom</th>
                <th class="col-sm-2">Action</th>
            </tr>
        </thead>
     <!-- afficher sur la table les donnees from data base -->
        <tbody>
        <?php while ($row = $result->fetch()):?>
        <tr>
            <th scope="row"><?php echo $row['id_service']; ?></th>
            <td><?php echo $row['nom_service'];?></td>
            <td><a href="servform.php?delete=<?php echo $row['id_service']; ?>"
             class="btn btn-danger btn-sm">supprimer</a></td>
        </tr>
        <?php endwhile; ?>
        
        </tbody>
       
    </table>
    </div>

</body>

</html>