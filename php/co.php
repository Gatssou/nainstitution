<?php
session_start();
require_once 'bdd.php';

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE emails = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $password= hash('sha256', $password);
            $password= password_hash('sha256', PASSWORD_BCRYPT);
        
            if($data['password'] === $password){
                $_SESSION['user'] = $data['pseudo'];
                header('Location:landing.php');
            }else header('Location: login.php?login_err=password');
        }else header('Location: login.php?login_err=user');
    }else header('Location: login.php?login_err=already');
}else header('Location: ./index.php');