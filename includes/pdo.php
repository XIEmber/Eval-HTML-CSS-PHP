<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=eval',
  'root', '',
  array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
  )
);
}
catch (PDOException $e) {
  echo "Ouai non ta raté un truc là" . $e->getMessage();
}
