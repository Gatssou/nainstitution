<?php
session_start()
?>
<?php
require_once '../index.php';
?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="../Photos/pokeball-5128709_960_720.webp" type="image">
      <link rel="stylesheet" href="../index.css">
      <title></title>
   </head>
   <body>
   <div class="prout">
   <div class="container2">
   <form action="inscription_traitement.php" method="post">
      <label for="pseudo">Pseudo</label>
      <input type="text" name="pseudo" placeholder="Votre pseudo" required="required" autocomplete="off">
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="Votre email" required="required" autocomplete="off">
      <label for="password" >Votre mot de passe : entre 5 et 10 caractères</label>
      <input type="password" name="password" placeholder="Votre mot de passe" required="required" autocomplete="off">
      <label for="password_retype">Confirmer le mot de passe</label>
      <input type="password" name="password_retype" placeholder="Re-tapez le mot de passe"  required="required" autocomplete="off">
      <input type="submit"></input>
      <div class="redirection_connexion">
         <a href="">Mot de passe oublié?</a>
         <a href="./connexion.php">Deja inscrit ?</a>
      </div>
      <?php
         if(isset($_GET['reg_err'])){
            $err = htmlspecialchars($_GET['reg_err']);
         
            switch($err){
               case 'success':
                ?>
      <div class="alert_danger">
         <br><strong>Succès</strong>inscription réussie !
      </div>
      <?php
         break;
         
         case 'already':
            ?>
      <div class="alert_danger">
         <br><strong>Erreur</strong> : email/mot de passe/pseudo deja utilisé
      </div>
      <?php
         break;
         }
         }
         ?>
   </form>
   </body>
   <script src="../index.js"></script>
</html>