<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
    $recupForme = $bdd->query('SELECT * FROM recup');
    if(!$_SESSION['mdp']){
        header('Location: connexion.php');
        
    } 
    ?>
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="shortcut icon" href="../img/terre.gif" type="image">
           <link rel="stylesheet" href="./recup.css">
           <title>Nain ventura</title>
       </head>

       <body>
       <?php    
       while($article = $recupForme->fetch()):
        ?>
            <div class="articlee" >
             <div class="article" >
             <img   src="../img/raitchu.png"  alt="">
                 <h1><?= $article['recupmail'];?></h1>
                 <p><?= $article['descript'];?></p>
                 <a href="./supp.php?id=<?= $article['id'];?>"> <button style="color:black;  margin-bottom:10px; "> Supprimer l'article</button>
                </a>
             
             </div>
             <br>
     
        </div>
    <hr>
        <?php
        endwhile; 
        ?>
        <br>
        </body>
       </html>
