<?php



$message = "";
$error = "";

if (isset($_POST['submit'])) {
  if (empty($_POST["question"])) {
    $error = "<label class='font-weight-bold text-danger'>Veuillez saisir une question</label>";
  } else if (empty($_POST["proposal1"])) {
    $error = "<label class='font-weight-bold text-danger'>Veuillez saisir la ou les proposition(s) manquante</label>";
  } else if (empty($_POST["proposal2"])) {
    $error = "<label class='font-weight-bold text-danger'>Veuillez saisir la ou les proposition(s) manquante</label>";
  } else if (empty($_POST["proposal3"])) {
    $error = "<label class='font-weight-bold text-danger'>Veuillez saisir la ou les proposition(s) manquante</label>";
  } else if (empty($_POST["proposal4"])) {
    $error = "<label class='font-weight-bold text-danger'>Veuillez saisir la ou les proposition(s) manquante</label>";
  } else if (empty($_POST["answer"])) {
    $error = "<label class='font-weight-bold text-danger'>Veuillez saisir la réponse</label>";
  } else {
    if (file_exists('js/questions.json')) {
      $myData = file_get_contents('js/questions.json');
      $array_data = json_decode($myData, true);
      $extra = array(
        "question" => $_POST["question"],
        "proposal1" => $_POST["proposal1"],
        "proposal2" => $_POST["proposal2"],
        "proposal3" => $_POST["proposal3"],
        "proposal4" => $_POST["proposal4"],
        "answer" => $_POST["answer"],
      );
      $array_data[] = $extra;
      $final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
      if (file_put_contents('js/questions.json', $final_data)) {
        $message = "<p class='font-weight-bold text-success'>La question a bien été ajoutée</label>";
      }
    } else {
      $error = 'Fichier JSON non trouvé';
    }
  }
}
?>