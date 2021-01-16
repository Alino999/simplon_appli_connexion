<?php
try {
    //connexion à la base de données
    const user = "root";
    const pass = "";
    $db = new PDO ("mysql:host=localhost; dbname=simplon-appli", user, pass);
  } catch (\Throwable $th) {
    //afficher les erreures
}
?>


