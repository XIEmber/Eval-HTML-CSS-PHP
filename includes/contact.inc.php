<h1>Contact</h1>
<?php
if (isset($_POST['frmcontact'])){
  echo "Bienvenue nouveau démon";
}
else{
  echo"Bievenue en enfer";
}
require 'frmcontact.php';
?>
