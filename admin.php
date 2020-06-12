<?php
  require 'handler-login.php';
  require 'handler.php';

  // var_dump($_SESSION["loggedin"]);
  // die();
  
  if($_SESSION['loggedin'] = FALSE) { 
    header('location: login.php');
    exit();
  } else {
    header('location: admin.php');
    exit();
  }
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

  <div class="container-fluid h-100 d-flex align-items-center">
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

    <div class="open-overlay">
      <div class="p-2 default-color rounded-circle">
        <span class="bar-top"></span>
        <span class="bar-middle"></span>
        <span class="bar-bottom"></span>
      </div>
    </div>

    <div class="container-fluid h-100 d-flex align-items-center">
      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col-md-10 z-depth-1 pt-4 pb-4 customcard justify-content-center">
           
            <h1 class="text-center mb-5">Bienvenue <?php echo $_SESSION["name"] ?>, veuillez ajouter une question</h1>

            <div class="col-8 offset-2">

              <form class="text-center" action="" method="post">

                <div class="md-form mb-3">
                  <input type="text" class="form-control mb-4 focus" id="validationCustom01" name="question" value="<?php echo isset($_POST['question']) ? $_POST['question'] : ''; ?>">
                  <label for="validationCustom03">Question:</label>
                </div>
                <div class="md-form mb-3">
                  <input type="text" class="form-control mb-4 focus" id="validationCustom02" name="proposal1" value="<?php echo isset($_POST['proposal1']) ? $_POST['proposal1'] : ''; ?>">
                  <label for="validationCustom04">Proposition 1:</label>
                </div>
                <div class="md-form mb-3">
                  <input type="text" class="form-control mb-4 focus" id="validationCustom03" name="proposal2" value="<?php echo isset($_POST['proposal2']) ? $_POST['proposal2'] : ''; ?>">
                  <label for="validationCustom05">Proposition 2:</label>
                </div>
                <div class="md-form mb-3">
                  <input type="text" class="form-control mb-4 focus" id="validationCustom04" name="proposal3" value="<?php echo isset($_POST['proposal3']) ? $_POST['proposal3'] : ''; ?>">
                  <label for="validationCustom06">Proposition 3:</label>
                </div>
                <div class="md-form mb-3">
                  <input type="text" class="form-control mb-4 focus" id="validationCustom05" name="proposal4" value="<?php echo isset($_POST['proposal4']) ? $_POST['proposal4'] : ''; ?>">
                  <label for="validationCustom07">Proposition 4:</label>
                </div>
                <div class="md-form">
                  <input type="text" class="form-control mb-4 focus" id="validationCustom06" name="answer" value="<?php echo isset($_POST['answer']) ? $_POST['answer'] : ''; ?>">
                  <label for="validationCustom08">Réponse:</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button class="btn btn-default btn-lg waves-effect play-hover marker my-4" type="submit" name="submit">Soumettre</button>
                  <button class="btn btn-default btn-lg waves-effect play-hover marker my-4" type="button" name="logout"><a class="text-reset" href="logout.php">Déconnexion</a></button>
                </div>
                
                <?php
                  if (isset($message)) {
                    echo $message;
                  }
                  if (isset($error)) {
                    echo $error;
                  }
                ?>
              </form>


            </div>
          </div>

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
    <script src="js/admin.js"></script>
</body>

</html>