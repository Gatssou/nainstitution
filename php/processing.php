<?php
session_start();
require_once './bdd.php';

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['password_retype'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
        /*if(strlen($pseudo) <= 100){ 
            if(strlen($email) <= 100){*/

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            if($password == $password_retype){
              /*  $password= hash('sha256', $password);*/
               /* $pass = password_hash($password, PASSWORD_BCRYPT);*/
               $rand = rand();
               $token = md5($rand);
               
                $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password) VALUES(:pseudo, :email, password)');
                $insert->execute(array($pseudo, $email, $password, $token));
                $token = base64_encode($token);
                $url = "verification.php?token=".urlencode($token)." ";
                echo "Lien de vérification : <br>"
                ."<a href='".$url."'>Verification</a>";
                header('Location: inscription_merci.php?reg_err=success');
            }else header('Location: inscr.php?reg_err=password');
        }else header('Location: inscr.php?reg_err=email');
    }else header('Location: inscr.php?reg_err=already');
}
?>