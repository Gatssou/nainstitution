<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(!$_SESSION['mdp']){
    header('location: connexion.php');
}
/*Methode POST on récupere les informations "description" et "titre" grâçe au bouton envoie type submit de NOM ('ENVOIE') dans le formulaire [Form]  , on lui dit à l'aide 
d'une methode$_POST attention si le champs titre est remplie et que attention le champ description est aussi remplie sans conditions ou (avec), puis à l'aide d'une securité si une personne  remplie le champ par des codes html pas gentil on lui dit htmlspecialchars pour titre et la description , et nl2(br ) pour insérer un retour à la ligne à chaque nouvelle ligne puis on récupere le titre et la description avec une définition $recupdescriptionarticle ou autre dans ce cas $inserArticle et à l'aide d'une variable prepare ->execute->
on INSERT dans la table admin les données recuperé dans les champs titre, description de valeur(?, ?)= comme il y a deux valeurs de la table */
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
    <link rel="shortcut icon" href="./img/terre.gif" type="image">
    <link rel="stylesheet" href="./css/index.css">
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
            width: 10vw;
            height: 10vh;
        }
        input{
            text-align: center;
            justify-content: center;
        }
        .envoie{
            height: 4vh;
            width: 13vw;
            cursor: pointer;
        }
        .titre{
            border: 2px ridge orange;
            display: flex;
            justify-content: center;
            height: 3vh;
            width: 12vw;
        }
        footer a{
    display: flex;
    justify-content: end;
    color: white;

}
    </style>
    <form action="" method="POST">
<input class="titre" type="text" name="titre" placeholder="Titre" >
<br>
<textarea name="description" placeholder="Description" ></textarea>
<br>
<input class="envoie" type="submit" name="envoi">
    </form>
    <footer>
 <a href="adlogout.php">Se déconnecter</a>
 </footer>
</body>
</html>