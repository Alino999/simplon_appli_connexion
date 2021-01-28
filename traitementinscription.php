<?php
require_once 'connexion.php';
function inputIsSet($input) {
    return isset($input) ? $input : '';
}
$pseudo = inputIsSet($_POST['pseudo']);
echo $pseudo;
$email = inputIsSet($_POST["email"]);
echo $email;
$password = hash('sha256', inputIsSet( $_POST["password"]));
echo $password;

$preparation = $db->prepare("INSERT INTO inscri (ID, pseudo, email, password) VALUES(?, ?, ?, ?)");
$preparation->execute(array("", $pseudo, $email, $password));
header('Location: index.html');

?>