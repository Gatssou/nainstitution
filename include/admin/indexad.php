<?php
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
    <link rel="stylesheet" href="./css/index.css">
    <title>Page administration Gagnant</title>
</head>
<body>
<div id="toggle">
        <i class="inducator"></i>
    </div>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
   transition: 0.5s;
 background: white;  
 display: flex;
 justify-content:space-around;
        }

body.active{
    background: black; 
}
footer.active{
    color: red;
}
#toggle{
    position: relative;
    display: block;
    width: 20px;
    height: 20px;
    border-radius: 16px;
    background: white;
    transition: 0.5s;
    cursor: pointer;
}
#toggle.active{
    background: black;
    color: red;
}
#toggle .inducator{
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    background: linear-gradient(to bottom, #444,#222);
    border-radius: 50%;
    transform: scale(0.9);
    transition: 0.5s;
}
#toggle.active .inducator{
    left:110vh;
    background: grey;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1),
                inset 0 4px 4px rgba(255,255,255,1),
                inset 0 -4px 4px rgba(255,255,255,1);
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
<script>
        const body = document.querySelector('body');
    
        const toggle = document.getElementById('toggle');
        toggle.onclick = function(){
            toggle.classList.toggle('active');
            body.classList.toggle('active');
        }
    </script>
</html>