<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM logtest WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() >0){ //retourne lignes affectés
        $bannirUser = $bdd->prepare('DELETE FROM logtest WHERE id = ?');
        $bannirUser->execute(array($getid));

        header('location: membres.php');
    }else{
        echo " aucun membre n'a été trouvé";
    }
}else{
    echo "L'indentifiant n'a pas été récupéré";
}
?>