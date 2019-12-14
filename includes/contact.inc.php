<h1 id="Contact">CONTACT</h1>
<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['email']);
  $phone = checkInput($_POST['numero']);
  $msg = checkInput($_POST['message']);
  $file = checkInput($_FILES['fichier']);
  $erreur = array();
  if ($nom === "")
    array_push($erreur, "Nom de demon");
  if ($prenom === "")
    array_push($erreur, "Prenom de demon");
  if ($mail === "")
    array_push($erreur, "Email demoniaque");
  if ($phone === "")
    array_push($erreur, "Numero demoniaque");
  if ($msg === "")
    array_push($erreur, "Un message pour notre seigneur");
  if ($file ==="")
    array_push($erreur, "Met une photo qu'on rigole");
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
    $sqlVerif = "SELECT COUNT(*) FROM contact
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
    if ($nbrOccurences > 0) {
      echo "T'déjà en enfer sale fou";
    }
    else {
    $sql = "INSERT INTO contact
    (nom, prenom, mail, phone, message, file)
    VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $phone ."', '" . $msg ."', '" . $file ."')";
    $query = $pdo->prepare($sql);
    $query->bindValue('nom', $nom, PDO::PARAM_STR);
    $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue('email', $mail, PDO::PARAM_STR);
    $query->bindValue('numero', $phone, PDO::PARAM_STR);
    $query->bindValue('message', $msg, PDO::PARAM_STR);
    $query->bindValue('fichier', $file, PDO::PARAM_STR);
    $query->execute();
    echo "On verra si on te recontacte";
    }
  }
}
else {
  $nom = $prenom = $mail = $phone = $msg = $file = "";
  require 'frmContact.php';
}
