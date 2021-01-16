<?php
require_once 'connexion.php';
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$naissance = $_POST["naissance"];
$sexe = $_POST["sexe"];
$ville = $_POST["ville"];
$formation = $_POST["formation"];
$email = $_POST["email"];

$preparation = $db->prepare("INSERT INTO apprenants (ID, Email, Nom, Prenom, Dates_de_naissance, Sexe) VALUES(?, ?, ?, ?, ?, ?)");
$preparation->execute(array("", $email, $nom, $prenom, $naissance, $sexe));

?>