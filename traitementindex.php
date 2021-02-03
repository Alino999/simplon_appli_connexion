<?php






require_once 'connexion.php';

   
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$check = $db->prepare('SELECT pseudo, email, password FROM user WHERE email = ?');
$check->execute(array($email));
$data = $check->fetch();
$row = $check->rowCount();

if($row == 1)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        
        if(password_verify($password, $data['password']))
        {
            $_SESSION['user'] = $data['email'];
            header('Location: admi.php');
            die();
        }else{ header('Location: index.php?login_err=password'); die(); }
    }else{ header('Location: index.php?login_err=email'); die(); }
}else{ header('Location: index.php?login_err=already'); die(); }






/*
require_once 'connexion.php';

$pseudo = $_POST['email'];
$password = hash('sha256', $_POST['password']);
$preparation = $db -> query ('SELECT* FROM inscri');
$data = $preparation -> fetch();
if($pseudo == $data['email'] && $password == $data['password']) header('Location:liste.php');
*/
?>