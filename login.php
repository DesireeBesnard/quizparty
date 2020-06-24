<?php
include 'handler-login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- meta generales -->
  <meta name="author" content="Désirée Besnard">
    <meta name="category" content="Web application de quiz, QuizParty">
    <meta name="Keywords" content="Web, application, développement, jeu, quiz, questions, réponses">
    <meta name="description" content="QuizParty est un jeu trivia de divertissement. Iil s'agit d'un quiz avec des questions portant sur des questions de culture générale. Le but est d'avoir le meilleur score possible">
  <!-- index -->
    <meta property="og:title" content="QuizParty - Le jeu qui vous suit partout">
    <meta property="og:description" content="QuizParty est un jeu trivia de divertissement. Iil s'agit d'un quiz avec des questions portant sur des questions de culture générale. Le but est d'avoir le meilleur score possible">
    <meta property="og:image" content="images/metafacebookquizparty.jpg">
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="QuizParty - Le jeu qui vous suit partout">
    <meta name="twitter:description" content="QuizParty est un jeu trivia de divertissement. Iil s'agit d'un quiz avec des questions portant sur des questions de culture générale. Le but est d'avoir le meilleur score possible">
    <meta name="twitter:image" content="images/metatwitter.jpg">
    <meta name="twitter:card" content="images/metatwitterquizparty.jpg">
    <meta name="twitter:site" content="#">
    <title>QuizParty - Login</title>
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
            <a href="https://desireeb.promo-vesoul33.codeur.online/quizparty"><img class="img-fluid logo-quizparty" src="img/logo-quizparty.png" alt="logo du site QuizParty"></a>
        </div>
        <?php include 'nav.php' ?>
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




    <?php
    include 'mdb-js.php';
    ?>
    <!-- custom scripts -->
    <script src="js/script.js"></script>
</body>

</html>