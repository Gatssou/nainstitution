<?php
   session_start();
   if(!isset($_SESSION['user']))
   ?>
   <!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../index.css">
      <link rel="shortcut icon" href="../Photos/pokeball-5128709_960_720.webp" type="image">
      <title>Connexion réussie</title>
   </head>
<body>
   
   <div class="prout">
   <div class="container2">
      <h1>Inscription bien envoyé</h1>
      <p>Merci d'avoir pris le temps de remplir la page d'inscription <br>Vous pouvez maintenant vous connectez.</p>
      <div class="redirection_connexion">
         <a href="./connexion.php">Retour a la connexion</a>
      </div>
   </div>
</body>
<script src="../Code/jquery-3.6.0.min.js"></script>
<script src="../Code/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../index.js"></script>
</html>