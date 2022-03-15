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
    <link rel="shortcut icon" href="./img/terre.gif" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nain ventura</title>
</head>
<style>
    body{
        background: black;
        display: flex;
        justify-content: center;
    }
    .supergrille{
        color: white;
        font-size: 1em;
    }
   
  

</style>
<body class="supergrille">
    <div class="retour"><a href="./indexad.php"><img src="./img/retour.png" alt=""></a></div>
    <!--Afficher tous les membres , on recupere tout les pseudo dans la table -->
  <?php
$recupUsers = $bdd->query('SELECT * FROM logtest');
while($user = $recupUsers->fetch()){
 ?>
 <div class="articlee">
    <img src="../admin/img/pikapika.png" height="100px" width="100px" alt="">
 <p><?= $user['username'];?><a href="bannir.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">Bannissement du gueux !</a></p>
 <?php 
}
         ?>
</div>
    <!--Fin d'afficher tous les membres -->
    <footer>
 <a href="adlogout.php">Se déconnecter</a>
 </footer>
    
</body>
</html>