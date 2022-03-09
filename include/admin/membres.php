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
    <link rel="shortcut icon" href="./img/terread.gif" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body{
            background: black;
            color: white;
          
        }
       p {
         color: white;
         text-align: center;
         padding: 10px;
         background-color: black;
         border: 10px;
         box-shadow:  5px 5px 15px gray;
            justify-content: center;
            display: flex;
            flex-direction: column;
            font-family: "Bungee Inline", sans-serif;
         text-shadow: 2px 2px 8px red;
        }
        footer a{
    display: flex;
    justify-content: end;
    color: white;
}
.retour{
    display: flex;
    justify-content: start;
}
.container{
    color: white;
 display: flex;
 justify-content: center;
}
.row{
    display: grid;
  grid-template-columns: repeat(1, 2fr);
   
}
    </style>
    <div class="retour"><a href="./indexad.php"><img src="./img/retour.png" alt=""></a></div>
    <!--Afficher tous les membres , on recupere tout les pseudo dans la table -->
    <div class="container">
  <div class="row">
  <?php
$recupUsers = $bdd->query('SELECT * FROM logtest');
while($user = $recupUsers->fetch()){
 ?>
 <p><?= $user['username'];?><a href="bannir.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">Bannissement du gueux !</a></p>
 <?php 
}
         ?>
  </div>
</div>

    
  
    <!--Fin d'afficher tous les membres -->
    <footer>
       
 <a href="adlogout.php">Se déconnecter</a>
 </footer>
    
</body>
</html>