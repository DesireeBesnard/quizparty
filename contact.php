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
    <title>QuizzParty - Contact</title>
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

    <div class="container-fluid h-100 d-flex align-items-center">
        <div class="logo position-absolute">
            <a href="https://desireeb.promo-vesoul33.codeur.online/quizparty"><img class="img-fluid logo-quizparty" src="img/logo-quizparty.png" alt="logo du site QuizParty"></a>
        </div>
        <?php include 'nav.php' ?>

        <div class="container card text-center pt-5 mt-5 mt-md-0">

            <h1 class="marker mb-5">Vous avez apprécié ce jeu?</h1>
            <h2 class="contact-text mt-2 mb-4">Retrouvez mes autres projets sur</h2>
            <div class="mx-auto pb-3">
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="cedarville ml-3 mr-3"><a href="https://desireeb.promo-vesoul33.codeur.online/portfolio/" target="_blank"><img class="img-fluid contact-img" src="img/logo_desireebesnard_cedarville.png" alt="logo Désirée Besnard"></a></li>
                    <li class="ml-3 mr-3"><a href="https://github.com/DesireeBesnard" target="_blank"><img class="img-fluid contact-img" src="img/github.png" alt="logo github"></a></li>
                    <li class="ml-3 mr-3"><a href="https://www.facebook.com/desiree.ignakpelila" target="_blank"><img class="img-fluid contact-img" src="img/facebook.png" alt=""></a></li>
                    <li class="ml-3 mr-3"><a href="https://fr.linkedin.com/in/desireebesnard" target="_blank"><img class="img-fluid contact-img" src="img/linkedin.png" alt=""></a></li>
                </ul>
            </div>
            <p class="contact-footer mt-3">Désirée Besnard - Copyright © <?php echo date("Y") ?></p>

        </div>
    </div>




    <?php
    include 'mdb-js.php';
    ?>
    <!-- Your custom scripts (optional) -->
    <script src="js/script.js"></script>

</body>

</html>