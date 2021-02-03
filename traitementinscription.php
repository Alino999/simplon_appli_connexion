<?php

    require_once 'connexion.php';

    if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $db->prepare('SELECT pseudo, email, password FROM user WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($pseudo) <= 100){
                if(strlen($email) <= 100){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password == $password_retype){

                      
                            $password = password_hash($password, PASSWORD_BCRYPT);
                            
                            $ip = $_SERVER['REMOTE_ADDR'];

                            $insert = $db->prepare('INSERT INTO user (pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip
                            ));

                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }









/*require_once 'connexion.php';
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
header('Location: index.html');*/

?>