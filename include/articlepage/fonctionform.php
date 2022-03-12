<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_POST['starting'])){
    if(!empty($_POST['maill']) AND !empty($_POST['descript'])){
                     $maill= htmlspecialchars($_POST['maill']);
                     $descript = nl2br(htmlspecialchars($_POST['descript']));
$insererForm = $bdd->prepare('INSERT INTO recup (recupmail, descript) VALUES (?, ?)');
$insererForm->execute(array($maill, $descript));

header('location: envoief.php');

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
    <link rel="shortcut icon" href="../img/terre.gif" type="image">
    <link rel="stylesheet" href="./../../sass/index.scss">
    <title>Nain ventura</title>
</head>

<body>
<style>
    body{
background-color: gray;
    }
   .content{
        background: rgba(197, 190, 190, 0.541);
    }
</style>


</html>

<form class="content" action="" method="POST">
<img src="./Img/mail.png" alt="" class="proute">
    <label class="mail" for="mail">Mail:</label  >
    
    <input class="titre" type="text" name="maill" placeholder="Email ou pseudo ">

    <label class="textarea" for="textarea">Description:</label>

    <img class="plume" src="../articlepage/Img/plume.png" alt="">

    <textarea class="textarea-con" name="descript" placeholder="write"></textarea>

    <input class="envoie" type="submit" name="starting"> <span><a href="./envoief.php">ici</a></span>
</form>
</body>