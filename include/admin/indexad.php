<?php
/* Session_start récupere l'id de connexion pour rester connecté si déconnexion ou non inscription dans la base redigera vers connexion.php ou un message d'erreur */
session_start();
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
    <link rel="stylesheet" href="./css/naruto.css">
    <meta name="viewport" content="width=a, initial-scale=1.0">
   
    <title>Page administration Gagnant</title>
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
 display: flex;
 justify-content:space-around;
 align-items: center;
        }
footer.active{
    color: red;
}
     .contien{
        font-family: "Bungee Inline", sans-serif;
         font-size: 3em;
   display: flex;
   top: 50vh;
   position: absolute;
   flex-direction: column;
     }
     .contien .deco{
         margin-top: 5vh;
     }
       .membres {
        border-bottom: 1px white ridge;
           color: white;
            text-decoration: none;
            list-style: none;
            margin: 8px;
            box-shadow: 5px 5px 5px red;
            text-shadow: 7px 7px  red ;
        }
       .publier {
        border-bottom: 1px white ridge;
        text-shadow: 5px 5px  orange ;
        margin: 8px;
           color: white;
            text-decoration: none;
            box-shadow: 5px 5px 9px orange;
        }
       .articles {
        border-bottom: 1px white ridge;
        text-shadow: 7px 6px  blue ;
        box-shadow: 5px 5px 5px blue;
        margin: 8px;
           color: white;
            text-decoration: none;
            list-style: none;
        }
       .recupenvoie {
        border-bottom: 1px white ridge;
        text-shadow: 7px 6px  black ;
        box-shadow: 5px 5px 5px black;
        margin: 8px;
           color: white;
            text-decoration: none;
            list-style: none;
        }
      .membre{
          color: black;
          
      }
      .naruto img{
        box-shadow: 5px 5px 5px black;
          border-radius: 30%;
      }
    </style>
   <div class="naruto">
<img src="./img/narutopain.gif" alt="">
   </div>
    <div class="contien">
        <a class="membres" href="membres.php">Afficher tous les gueux </a>
       
        <a class="publier" href="./publier-article.php">Publier un nouvel article  </a>
      
        <a class="articles" href="./articles.php">Afficher tous les articles </a>

        <a class="recupenvoie" href="./adminsite/recupenvoie.php">Afficher tous les envoies </a>
        <div class="deco"><a href="adlogout.php">Se déconnecter</a></div>
    </div>
 
</body>

</html>