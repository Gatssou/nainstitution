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
    <link rel="stylesheet" href="./../../sass/index.scss">
    <title>Document</title>
</head>

<body>

</body>




</html>
<form class="content" action="" method="POST">
<img src="./Img/mail.png" alt="" class="proute">
    <label class="mail" for="mail">Mail:</label  >
    
    <input class="titre" type="text" name="maill" placeholder="JeanPierre@Outlook.fr">
    <label class="textarea" for="textarea">Description:</label>
    <img class="plume" src="../articlepage/Img/plume.png" alt="">
    <textarea class="textarea-con" name="descript" placeholder="Raconte pas trop ta vie stpl"></textarea>

    <input class="envoie" type="submit" name="starting">
</form>