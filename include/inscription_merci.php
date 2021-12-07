<?php
session_start();
require_once 'bdd.php';

if(isset($_GET['conftoken'])){
    $conftoken = htmlspecialchars($_GET['conftoken']);
    $conftoken = urldecode($conftoken);
    $conftoken = base64_decode($conftoken);

    $check = $bdd->prepare('SELECT * FROM logtest WHERE conftoken = ?');
    $check->execute(array($conftoken));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1){
        if($data['roletype'] == 0){
            $update = $bdd->prepare('UPDATE logtest SET roletype = 1 WHERE conftoken = ?');
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