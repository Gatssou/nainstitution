<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(!$_SESSION['mdp']){
    header('location: connexion.php');
}

if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST['description'])){
                     $titre = htmlspecialchars($_POST['titre']);
                     $description = nl2br(htmlspecialchars($_POST['description']));
$insererArticle = $bdd->prepare('INSERT INTO admin(titre, description) VALUES (?, ?)');
$insererArticle->execute(array($titre, $description));

header('location: articles.php');

    }else{
       
    }
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roi des articles</title>
</head>
<body>
<div class="retour"><a href="./indexad.php"><img src="./img/retour.png" alt=""></a></div>
<style>
        body{
            background: black;
        }
        form{
            margin-top: 20%;
            margin-left: 40%;
            text-align: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }
        textarea{
            border: 3px ridge orange;
            text-align: center;
            justify-content: center;
            width: 30vw;
            height: 10vh;
        }
        input{
            text-align: center;
            justify-content: center;
        }
        .envoie{
            height: 4vh;
            width: 17vw;
            cursor: pointer;
        }
        .titre{
            border: 2px ridge orange;
            display: flex;
            justify-content: center;
            height: 3vh;
            width: 38vw;
        }
    </style>
    <form action="" method="POST">
<input class="titre" type="text" name="titre" placeholder="Titre" >
<br>
<textarea name="description" placeholder="Description" ></textarea>
<br>
<input class="envoie" type="submit" name="envoi">
    </form>
    
  


</body>
</html>