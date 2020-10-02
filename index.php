<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlgoSite</title>
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/monokai.css">
    <link rel="stylesheet" href="css/site.css">
</head>
<header>
    <?php
        include ("include/myNav.php");
    ?>
</header>
<body>
    <div class="home">
        <div class="fixed-top">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-light p-4">
                    <h5 class="text-black h4">Bienvenue sur mon Exodalgo</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                    <button class="btn btn-secondary plus">Python</button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top">
                        Java
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top">
                        Plus
                    </button>
                    <i class="fas fa-clock"></i>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h3>FORMATION DEVELOPPEUR LOGICIEL</h2>
                    <div class="myTitre">
                        <img src="img/eloce.jpg" height="80px">
                    </div>
            </nav>
        </div>
        <div class="container-fluid ">
            <h4>ALGORITHME ET PSEUDO-CODE:</h4>
            <ul id="card"></ul>
            <hr width="75%" size="1px" color="olivedrab" />
            <div class="row">
                <div class="col-md-2 myAside">
                   
                </div>

                <div class="col-md-8">
                    <div class="content">
                       <img src="img/article.jpg">
                    </div>
                </div>
                <div class="col-md-2 contentRight">
                    <div class="cours">
                        <button type="button">Cours</button>
                    </div>
                    <div class="myCodeRight">
                        <img src="img/algorithme.jpg">
                        <img src="img/pion.png">
                        <img src="img/Jquery-logo.png">
                        <img src="img/php.png">
                       <img src="img/java.png"height="80px"> 
                       <img src="img/python.jpg"height="80px"> 
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/saison1.js" type="text/javascript"></script>
    <script src="js/saison2.js" type="text/javascript"></script>
    <script src="assets/rainbow-custom.min.js"></script>
</body>
<footer class="text-muted">
    <img src="img/AFPA_logo.png" height="80px" class="float-left">
    <p class="float-right">
        <a href="#">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </a>
    </p>
    <p>Exalgo is ©Ludovic Mouly example, but please download and customize it for yourself!</p>
    <p>New to Code ? <a href="https://metis.afpa.fr/login" target="_blank">Visit the afpa metis page</a>
</footer>

</html>