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
echo  "L'article a bien étè envoyé";

    }else{
        echo ' Veuillez compléter tous les champs...';
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
    <form action="" method="POST">
<input type="text" name="titre" >
<br>
<textarea name="description" ></textarea>
<br>
<input type="submit" name="envoi">

    </form>

</body>
</html>