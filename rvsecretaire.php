<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <title>rendez-vous Secretraire</title>
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
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Nom:</label>
                                    <input type="text" class="form-control" id="recipient-name">
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
                                    <input type="text" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Date de naissance:</label>
                                    <input type="date" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Heure de debut:</label>
                                    <input type="time" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="recipient-name" class="col-form-label">Heure de fin:</label>
                                    <input type="time" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Service</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
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
                                    <label for="exampleFormControlSelect1">Docteurs</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                                          <option>Samba Ndiaye</option>
                                                          <option>amadou Diop</option>
                                                          <option>Samba Ndiaye</option>
                                                          <option>amadou Diop</option>
                                                          <option>Samba Ndiaye</option>
                                                          <option>amadou Diop</option>
                                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Numero Tel</label>
                                    <input type="tel" class="form-control" id="inputEmail4" placeholder="Téléphone" required>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container table rendez-vous  -->
    <div class="container">
        <div class="notification">
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
                    <th class="col-lg-1">ID</th>
                    <th class="col-sm-2">Nom</th>
                    <th class="col-sm-2">Prenom</th>
                    <th class="col-sm-2">Service</th>
                    <th class="col-sm-2">Docteur</th>
                    <th class="col-sm-1">Date</th>
                    <th class="col-sm-1">Heure debut</th>
                    <th class="col-sm-1">Heure fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Ndiaye</td>
                    <td>Samba </td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                </tr>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Ndiaye</td>
                    <td>Samba </td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                </tr>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Ndiaye</td>
                    <td>Samba </td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                </tr>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Ndiaye</td>
                    <td>Samba </td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>