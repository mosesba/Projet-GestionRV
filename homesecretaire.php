<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles1.css">
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
    <title>Homepage Secretaire</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <span class="avatar">
                <img src="img/user8-512.png" alt="" style="width:5rem ">
                <h4>Abibatou Ndiaye</h4>
                <h5>sécrétaire</h5>
        </span>

        <a href="homesecretaire.php"><i class="fa fa-home" style="font-size:16px"></i> Home</a>
        <a href="rvsecretaire.php"><em class='far fa-calendar-alt' style='font-size:16px'></em> rendez-vous</a>
        <span class="deconnect">
            <a href="logoutsec.php"><em class="fa fa-cog" style="font-size:16px"></em> Déconnection</a>
        </span>
    </div>

    <div class="container">
        <h1>Bienvenue Abibatou Ndiaye</h1>
        <div class="notification">
            <!-- bouton de notification -->
            <button type="button" class="btn btn-primary">
             <i class="fas fa-bell"></i> <span class="badge badge-light">4</span>
            </button>
            <!-- fin bouton de notification -->
        </div>
        <!-- card -->
        <div class="row">
            <div class="card" style="width: 15rem ">
                <img src="img/image56.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem ">
                <img src="img/image45.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem ">
                <img src="img/image56.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>