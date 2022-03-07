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
  
 background: black;  
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
       .membres {
        border-bottom: 1px white ridge;
           color: white;
            text-decoration: none;
            list-style: none;
            margin: 20px;
            box-shadow: 5px 5px 5px red;
            text-shadow: 7px 7px  red ;
        }
       .publier {
        border-bottom: 1px white ridge;
        text-shadow: 10px 10px  orange ;
        margin: 20px;
           color: white;
            text-decoration: none;
            list-style: none;
            box-shadow: 5px 5px 5px orange;
        }
       .articles {
        border-bottom: 1px white ridge;
        text-shadow: 7px 7px  blue ;
        box-shadow: 5px 5px 5px blue;
        margin: 20px;
           color: white;
            text-decoration: none;
            list-style: none;
          
        }
footer a{
 left: 80%;
 top: 90%;
    color: white;
    position: absolute;
}
      
    </style>
    <div class="contien">
        <a class="membres" href="membres.php">Afficher tous les gueux !</a>
       
        <a class="publier" href="./publier-article.php">Publier un nouvel article !</a>
      
        <a class="articles" href="./articles.php">Afficher tous les articles !</a>
    </div>
    <footer>
 <a href="adlogout.php">Se déconnecter</a>
 </footer>
</body>

</html>