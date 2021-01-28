<?php
require_once 'connexion.php';

$pseudo = $_POST['email'];
$password = hash('sha256', $_POST['password']);
$preparation = $db -> query ('SELECT* FROM inscri');
$data = $preparation -> fetch();
if($pseudo == $data['email'] && $password == $data['password']) header('Location:liste.php');

?>