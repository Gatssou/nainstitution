<?php
session_start();
require_once './bdd.php';

if(isset($_GET['token'])){
    $token = htmlspecialchars($_GET['token']);
    $token = urldecode($token);
    $token = base64_decode($token);

    $check = $bdd->prepare('SELECT * FROM logtest  WHERE token = ?');
    $check->execute(array($token));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1){
        if($data['compte_verifie'] == 0){
            $update = $bdd->prepare('UPDATE logtest  SET compte_verifie = 1 WHERE token = ?');
            echo "Compte verifie avec succes !";
        }else{
            echo "Compte deja verifie";
        }
    }else{
        echo "Compte existe pas";
    }
}else{
    echo "Mauvais lien";
}
?>