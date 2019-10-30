<?php require "medform.php" 
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
    <title>Administrateur medecin</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <span class="avatar">
                <img src="img/user8-512.png" alt="" style="width:5rem ">
                <h4>Admin</h4>
                <h5></h5>
        </span>
        <a href="admedecin.php"><em class="fa fa-briefcase-medical" style="font-size:16px"></em> medecins</a>
        <a href="adservice.php"><em class='far fa-wpforms' style='font-size:16px'></em> Services</a>
        <a href="adsecretaire.php"><em class='far fa-id-badge' style='font-size:16px'></em> Secretaire</a>
        <span class="deconnect">
            <a href="logoutadmin.php"><em class="fa fa-cog" style="font-size:16px"></em> Déconnection</a>
        </span>
    </div>

    <div class="container">
        <h1>Admin</h1>
        <!-- button modal formulaire ajouter medecin , secretaire ,   -->
        <div class="buttonrv">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class='fas fa-plus'></i> Ajouter Medecin</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Medecin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- modal formulaire ajouter -->
                    <form  method="POST">

                        <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Matricule:</label>
                                        <input type="text" name="matricule" class="form-control" placeholder="M-001" id="recipient-name"readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">prenom:</label>
                                        <input type="text" name="prenom" class="form-control" id="prenom">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nom:</label>
                                        <input type="text" name="nom" class="form-control" id="nom">
                                        <!-- Validation feedback coté serveur  -->
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php ?> 
                                            <!-- Please choose a username -->
                                        </div>
                                        <!-- End Validation Feedback  -->
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Telephone:</label>
                                        <input type="tel" name="tel" class="form-control" placeholder="+221770000000" id="tel">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Specialités</label>
                                        <select class="form-control" name="specialite" id="exampleFormControlSelect1">
                                                      <option>Odontologie</option>
                                                      <option>Cardiologie</option>
                                                      <option>Pédiatrie</option>
                                                      <option>Dermatologie</option>
                                                      <option>Neurologie</option>
                                                      <option>Urologie</option>
                                                      <option>Médecine interne</option>
                                                      <option>Anesthésiologie</option>
                                                      <option>Rhumatologie - Médecine physique</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Password:</label>
                                        <input type="password" name="passwd" class="form-control" placeholder="" id="pass" minlength="5" required>
                                    </div>
                                </div>
                                   
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="annuler" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" name="submit" class="btn btn-primary"> Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        <!-- End Modal formulaire ajouter button rv -->

<?php 
$message="";
if(!empty($message)) ?>
<div class="alert alert-succes">
<?php echo $message ?>
</div>
        <!-- bouton de notification -->
        <button type="button" class="btn btn-primary">
            <i class="fas fa-bell"></i> <span class="badge badge-light">4</span>
           </button>
        <!-- fin bouton de notification -->
    </div>
    <!-- table -->
    <table class="table">
        <thead>
            <tr>
                <th class="col-sm-1">ID</th>
                <th class="col-sm-2">prenom</th>
                <th class="col-sm-2">nom</th>
                <th class="col-sm-2">Email</th>
                <th class="col-sm-1">Tel</th>
                <th class="col-sm-1">Specialite</th>
                <th class="col-sm-1">password</th>
                <th class="col-sm-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">m-001</th>
                <td>Ndiaye</td>
                <td>Samba</td>
                <td>exmple@gmail.com</td>
                <td>cardiologie</td>
                <td>77000000</td>
                <td>21456</td>
                <td><button type="button" class="btn btn-danger btn-sm">supprimer</button></td>
            </tr>
            <tr>
                <th scope="row">m-001</th>
                <td>Ndiaye</td>
                <td>Samba</td>
                <td>exmple@gmail.com</td>
                <td>cardiologie</td>
                <td>77000000</td>
                <td>12345</td>
                <td><button type="button" class="btn btn-danger btn-sm">supprimer</button></td>
            </tr>
            <tr>
                <th scope="row">m-001</th>
                <td>Ndiaye</td>
                <td>Samba</td>
                <td>exmple@gmail.com</td>
                <td>cardiologie</td>
                <td>77000000</td>
                <td>12345</td>
                <td><button type="button" class="btn btn-danger btn-sm">supprimer</button></td>
            </tr>
            <tr>
                <th scope="row">m-001</th>
                <td>Ndiaye</td>
                <td>Samba</td>
                <td>exmple@gmail.com</td>
                <td>cardiologie</td>
                <td>77000000</td>
                <td>12345</td>
                <td><button type="button" class="btn btn-danger btn-sm">supprimer</button></td>
            </tr>
        </tbody>
    </table>
    </div>
   
</body>

</html>