<?php
/* Session_start récupere l'id de connexion pour rester connecté si déconnexion ou non inscription dans la base redigera vers connexion.php ou un message d'erreur */
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
$utili = new PDO('mysql:host=localhost;dbname=blipou;','root','');

$stats = $utili->prepare('SELECT * FROM logtest ');
//execution de la rêquete pas besoin de bind pas de values

$executeisok = $stats->execute();
//recup le resultat
$profil = $stats->fetchALL();
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
<h1>
    <ul>
        <?php foreach ($profil as $profil):  ?>
            <?php endforeach; ?>
            <li>
                <?= $profil['username'] ?> 
                <?= $profil['id'] ?> 
                <?= $profil['email'] ?> 
            </li>
    </ul>
</h1>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
 background: white;  
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
    color: black;
    position: absolute;
}
      .membre{
          color: black;
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