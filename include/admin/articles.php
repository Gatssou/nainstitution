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
    <link rel="shortcut icon" href="./img/terread.gif" type="image">
    
    <title>Afficher tous les articles</title>
</head>
<body>
<div class="retour"><a href="./indexad.php"><img src="./img/retour.png" alt=""></a>
<style>
        body{
       background-color: black;
        }
      h1{
        font-family: "Bungee Inline", sans-serif;
         text-shadow: 10px 2px 8px red;
          color: white;
          text-align: center;
          justify-content:center;
      }
      p{
        color: white;
        text-align: center;
          justify-content:center;
          font-size: 2em;
          background-color:black;
          
          width: 100%;
      }
     button{
          cursor: pointer;
      }
      article{
          display: flex;
          justify-content: center;
          text-align: center;
      }
   
    </style>
    <!-- Selectionne dans la table admin  à l'aide d'une boucle while  on défini que $recupAricles = à ce qui se trouvera dans la table admin dans la bdd , tout ce qu'on aura selectionné dedans = $article = au resultat trouve , on affiche les donnés-> fetch()  dans une div  avec la recuperation des resultats trouvé en echo condensé $article ['Titre'] dans la table sera (h1 ) et $article['description'] sera (p)
qui = le titre et la description récuperé dans la base de donnée grâce à la method POST du formulaire de la page publier-article.php-->
    <?php
         $recupArticles = $bdd->query('SELECT * FROM admin');
         while($article = $recupArticles->fetch()){
             ?>
             <div class="article" style="border: 1px solid chartreuse;">
                 <h1><?= $article['titre'];?></h1>
                 <p><?= $article['description'];?></p>
                 <a href="./supprimer-article.php?id=<?= $article['id'];?>"> <button style="color:black; background-color: chartreuse; margin-bottom:10px; "> Supprimer l'article</button>
                </a>
                 <a href="./modifier-article.php?id=<?= $article['id'];?>"> <button style="color:white; background-color: red; margin-bottom:10px; "> Modifier l'article</button>
                </a>
             </div>
             <br>
             <?php
         }
    ?>
</body>
</html>