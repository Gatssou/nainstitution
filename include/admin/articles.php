<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(!$_SESSION['mdp']){
    header('location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher tous les articles</title>
</head>
<body>
<div class="retour"><a href="./indexad.php"><img src="./img/retour.png" alt=""></a>
<style>
        body{
            background: black;
          
        }
      h1{
        font-family: "Bungee Inline", sans-serif;
         text-shadow: 2px 2px 8px red;
          color: white;
          text-align: center;
          justify-content:center ;
      }
      p{
        color: white;
        text-align: center;
          justify-content:center ;
      }
     button{
          cursor: pointer;
      }
    </style>
    <?php
         $recupArticles = $bdd->query('SELECT * FROM admin');
         while($article = $recupArticles->fetch()){
             ?>
             <div class="article" style="border: 1px solid orange;">
                 <h1><?= $article['titre'];?></h1>
                 <p><?= $article['description'];?></p>
                 <a href="./supprimer-article.php?id=<?= $article['id'];?>"> <button style="color:white; background-color: red; margin-bottom:10px; "> Supprimer l'article</button>
                </a>
                 <a href="./modifier-article.php?id=<?= $article['id'];?>"> <button style="color:white; background-color: blue; margin-bottom:10px; "> Modifier l'article</button>
                </a>
              
             </div>
             <br>
             <?php
         }
    ?>
    
</body>
</html>