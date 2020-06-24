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

    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
        <div class="card p-5">
            <h1 class="notfound-title text-center mb-5 pb-2 marker">404</h1>
            <p class="text-center montserrat notfound-text">La page demandée est inconnue</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-default btn-lg waves-effect play-hover" href="index.html">Retour</a>
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