<?php
session_start();
require_once 'bdd.php';

if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['password_retype'])){
    $user = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT user, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($user));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){


        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            if($password == $password_retype){
               /* $password = password_hash($password, PASSWORD_BCRYPT);*/
               $rand = rand();
              
                $insert = $bdd->prepare('INSERT INTO utilisateurs (user, email, password) VALUES(?, ?, ?, ?)');
                $insert->execute(array($user, $email, $password));


                header('Location: inscription_merci.php');
            }else header('Location: inscription.php?reg_err=password');
        }else header('Location: inscription.php?reg_err=email');
    }else header('Location: inscription.php?reg_err=already');
}
?>