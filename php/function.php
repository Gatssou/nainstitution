<?php
session_start();
require_once 'bdd.php';

if(isset($_POST['user']) && isset($_POST['password'])){

    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['password']);

    $check = $bdd->prepare('SELECT user, password FROM utilisateurs WHERE user = ?');
    $check->execute(array($user));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1){
        if(filter_var($user, FILTER_VALIDATE_EMAIL)){
            /*$password = password_hash($password, PASSWORD_BCRYPT);*/
            if($data['password'] === $password){
                $_SESSION['user'] = $data['user'];
                header('Location: ./index.php');
            }else header('Location: login.php?login_err=password');
        }else header('Location: login.php?login_err=user');
    }else header('Location: login.php?login_err=already');
}else header('Location: ./index.php');