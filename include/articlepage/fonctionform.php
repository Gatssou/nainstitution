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

<form action="" method="POST">
<input class="titre" type="text" name="maill" placeholder="mail" >
<br>
<textarea name="descript" placeholder="Description" ></textarea>
<br>
<input class="envoie" type="submit" name="starting">
    </form>
    <div class="loniceratops">
        <h1><a href=""></a></h1>
    </div>
    
