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
    <title>Document</title>
</head>
<body>
    <a href="membres.php">Afficher tous les gueux</a>
    <a href="./publier-article.php">Publier un nouvel article</a>
    <a href="./articles.php">Afficher tous les articles</a>
</body>
</html>