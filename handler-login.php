<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'desireeb';
$DATABASE_PASS = 'hCDr2Z9W/gPbnQ==';
$DATABASE_NAME = 'desireeb_quizparty';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Connexion impossible à MySQL: ' . mysqli_connect_error());
}

function test_input($data) {
    // supprimer les espaces
    $data = trim($data);
    // supprimer les antislashs
    $data = stripslashes($data);
    // convertit les caractères spéciaux en entités HTML
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submitlogin'])) {
    // On vérifie que les champs ne sont pas vides
    if (empty($_POST["username"])) {
        $usernameErr = "<label class='text-danger'>Veuillez saisir un nom d'utilisateur</label>";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "<label class='text-danger'>Veuillez saisir un mot de passe</label>";
    } else {
        $password = test_input($_POST["password"]);
    }

    if ($stmt = $con->prepare('SELECT nom_utilisateur, mot_de_passe FROM utilisateurs WHERE nom_utilisateur = ?')) {
        // On relie les paramètres (s = string, i = int, b = blob, etc), dans notre cas username est un string donc on utilise "s"
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($username, $password);
            $stmt->fetch();
            // Si le compte existe on vérifie le mot de passe
            
            if ($_POST['password'] === $password) {
                // Authentification réussie, l'utilisateur est connecté
                // On crée ensuite une session pour notifier quee l'utilisateur est connecté, le fonctionnement ressemble à celui des cookies mais avec les données sur serveur.
                session_regenerate_id();
                $_SESSION["loggedin"] = TRUE;
                $_SESSION["name"] = $_POST['username'];
                header('location: admin.php');
            } else {
                $incorrectPass = "<p class='font-weight-bold text-danger'>Mot de passe incorrect</p>";
            }
        } else {
            $incorrectName = "<p class='font-weight-bold text-danger'>Nom d'utilisateur incorrect</p>";
        }
        $stmt->close();
    }
}

?>


