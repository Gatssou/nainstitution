<?php
session_start();
require '../bdd.php';

if(isset($_POST['valider'])) {
     if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
$pseudo_par_defaut = "admin";
$mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars(($_POST['mdp']));
             if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
                 $_SESSION['mdp'] = $mdp_saisi;
                 header('location: indexad.php');

             }else{
                 echo "votre mot de pass est incorrecte";
             }
 }else{
     echo "veuillez compléter tous les champs...";
 
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            text-align: center;
            justify-content: center;
            display: flex;
        }
    </style>
    <form action="" method="POST" >
        <input type="text" name="pseudo"  autocomplete="off">
        <br>
        <input type="password" name="mdp" autocomplete="off">
        <br><br>
        <input type="submit"  name="valider">
</form>
</body>
</html>