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
        }


footer.active{
    color: red;
}
     .contien{
      
        font-family: "Bungee Inline", sans-serif;
         font-size: 3em;
         position: relative;
   display: flex;
   flex-direction: column;
   justify-content: center;
     }
       .membres {
        border-bottom: 1px white ridge;
           color: white;
            text-decoration: none;
            list-style: none;
        }
       .publier {
        border-bottom: 1px white ridge;
           color: white;
            text-decoration: none;
            list-style: none;
        }
       .articles {
        border-bottom: 1px white ridge;
           color: white;
            text-decoration: none;
            list-style: none;
        }
footer a{
    display: flex;
    justify-content: end;
    color: white;

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