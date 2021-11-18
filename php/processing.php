<?php
session_start();
require_once 'bdd.php';

if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass'])  && isset($_POST['pass_retype'])){
    $pseudo = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['pass']);
    $password_retype = htmlspecialchars($_POST['pass_retype']);

    $check = $bdd->prepare('SELECT user, email, pass FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){


        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            if($pass == $pass_retype){
               /* $pass = password_hash($password, PASSWORD_BCRYPT);*/
               $rand = rand();
               $token = md5($rand);
               
                $insert = $bdd->prepare('INSERT INTO utilisateurs (user, email, pass, token) VALUES(?, ?, ?, ?)');
                $insert->execute(array($user, $email, $pass, $token));

                $token = base64_encode($token);
                $url = "verification.php?token=".urlencode($token)." ";
                echo "Lien de vérification : <br>"
                ."<a href='".$url."'>Verification</a>";

                header('Location: inscription_merci.php');
            }else header('Location: inscription.php?reg_err=password');
        }else header('Location: inscription.php?reg_err=email');
    }else header('Location: inscription.php?reg_err=already');
}
?>