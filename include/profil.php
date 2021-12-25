<?php
  session_start(); 
  require './include/functions.php';
  logged_only();
  // S'il n'y a pas de session alors on ne va pas sur cette page
 
  // On récupère les informations de l'utilisateur connecté
  require_once './bdd.php';
 

$afficher_profil = $pdo -> prepare("SELECT * FROM logtest WHERE id= ?");
$afficher_profil->execute(array( $_SESSION['auth']));
  $afficher_profil = $afficher_profil->fetch(); 

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
  <h2>Voici le profil de <?= $afficher_profil['nom'] . $afficher_profil['prenom']; ?></h2>

   <div>Quelques informations sur vous : </div>

    <ul>

      <li>Votre id est : <?= $afficher_profil['id'] ?></li>

      <li>Votre mail est : <?= $afficher_profil['email'] ?></li>

      <li>Votre compte a été crée le : <?= $afficher_profil['date_creation_compte'] ?></li>

    </ul>
</body>
</html>