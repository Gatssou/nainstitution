<?php 
session_start();
require_once './config.php';

if(isset($_POST['email']) && isset($_POST['password']))
{
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$check = $pdo->prepare("SELECT pseudo, email, password FROM utilisateurs WHERE email = :email");
$check->bindParam(':email', $email);
$check->execute();
$data = $check->fetch(PDO::FETCH_ASSOC);
$row = $check->rowCount();

if($row == 1)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $cost = ['cost' => 12];
            $password = password_hash($password, PASSWORD_BCRYPT, $cost);



            if($data->password === $password)
            {
                $_SESSION['user'] = $data->pseudo;
                header('Location:../index.php');
            }else header('Location:index.php?login_err=password');
        }else header('Location:index.php?login_err=email');
    }else header('Location:index.php?login_err=already');
}else header('Location:index.php'); 