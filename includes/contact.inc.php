<?php
// require_once './includes/pdo.php';
// require_once './functions/checkInput.php';

if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $phone = checkInput($_POST['phone']);
  $msg = checkInput($_POST['msg']);
  // $file = checkInput($_FILES['file']);
  $erreur = array();
  if ($nom === "")
  array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
  array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
  array_push($erreur, "Veuillez saisir une adresse mail");
  if ($phone === "")
  array_push($erreur, "Veuillez saisir un numéro");
  if ($msg === "")
  array_push($erreur, "Veuillez saisir un message");
  // if ($file ==="")
  //   array_push($erreur, "Veuillez insérer un fichier");
  if (count($erreur) > 0) {
    $message = '<ul>';
    for($i = 0 ; $i < count($erreur) ; $i++) {
      $message .= '<li>';
      $message .= $erreur[$i];
      $message .= '</li>';
    }
    $message .= '</ul>';
    echo $message;
    require 'frmContact.php';
  }
  else {
    $sqlVerif = "SELECT COUNT(*) FROM eval
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
    if ($nbrOccurences > 0) {
      echo '<p id="reponse" class="style_css">Déjà en enfer sale fou</p>';
    }
    else {
      $sql = "INSERT INTO eval (nom, prenom, mail, phone, msg) VALUES  ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $phone ."', '" . $msg ."')";
      $query = $pdo->prepare($sql);
      $query->bindValue(':nom', $nom, PDO::PARAM_STR);
      $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
      $query->bindValue(':mail', $mail, PDO::PARAM_STR);
      $query->bindValue(':phone', $phone, PDO::PARAM_STR);
      $query->bindValue(':message', $msg, PDO::PARAM_STR);
      // $query->bindValue('file', $file, PDO::PARAM_STR);
      $query->execute();
      echo '<p id="reponse" class="style_css">On te recontacte peut-être</p>';
    }
  }
}
else {
  $nom = $prenom = $mail = $phone = $msg = $file = "";
  require 'frmContact.php';
}
