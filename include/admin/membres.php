<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
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
    <!--Afficher tous les membres , on recupere tout les pseudo dans la table -->
    <?php
$recupUsers = $bdd->query('SELECT * FROM logtest');

while($user = $recupUsers->fetch()){
 ?>
 <p><?= $user['username'];?><a href="bannir.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">Bannissement du gueux</a></p>
 <?php 
}
         ?>
    <!--Fin d'afficher tous les membres -->
</body>
</html>