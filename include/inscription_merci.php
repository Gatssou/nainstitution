<?php


if(isset($_GET['conftoken'])){
    $conftoken = htmlspecialchars($_GET['conftoken']);
    $conftoken = urldecode($conftoken);
    $conftoken = base64_decode($conftoken);

    $check = $bdd->prepare('SELECT * FROM logte WHERE conftoken = ?');
    $check->execute(array($conftoken));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == NULL){
        if($data['roletype'] == NULL){
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