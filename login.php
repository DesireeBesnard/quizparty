<?php 
    require 'handler-login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quizz App</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/app.css">
</head>

<body class="main-body">

    <div class="container-fluid d-flex align-items-center">
        <div class="logo position-absolute">
            <a href="https://desireeb.promo-vesoul33.codeur.online/quizparty"><img class="img-fluid" src="img/logo-quizparty.png" alt="logo du site QuizParty"></a>
        </div>
        <div class="overlay-navigation">
            <nav role="navigation" class="marker">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="game.html">QuizParty</a></li>
                    <li><a href="scores.html">Scores</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="open-overlay">
        <div class="p-2 default-color rounded-circle">
            <span class="bar-top"></span>
            <span class="bar-middle"></span>
            <span class="bar-bottom"></span>
        </div>
    </div>

    <div class="container-fluid h-100 d-flex align-items-center">
        <div class="container">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6 z-depth-1 pt-4 pb-4 customcard justify-content-center">
                    <h1 class="text-center marker mb-4">Connexion</h1>
                    <div class="col-8 offset-2">
                        <!-- Default form login -->
                        <form class="text-center" action="" method="post">
                            <!-- Username -->
                            <div class="md-form mb-3">
                                <input type="text" id="defaultLoginFormUser" class="form-control mb-4 focus" name="username" required>
                                <label for="validationDefault01">Nom d'utilisateur:</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form mt-3 mb-3">
                                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4 focus" name="password" required>
                                <label for="validationDefault02">Mot de passe:</label>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-default btn-lg waves-effect play-hover marker my-4" type="submit" name="submitlogin">Connexion</button>
                            <div>
                            <?php
                                if (isset($usernameErr)) {
                                    echo $usernameErr;
                                } else if (isset($passwordErr)) {
                                    echo $passwordErr;
                                }
                                if (isset($incorrectName)) {
                                    echo $incorrectName;
                                } else if (isset($incorrectPass)) {
                                    echo $incorrectPass;
                                }
                            ?>
                            </div>
                        </form>
                        <!-- Default form login -->
                    </div>

                </div>
                <!--Grid column-->
            </div>


        </div>
    </div>




    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Velocity js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script src="js/script.js"></script>
</body>

</html>