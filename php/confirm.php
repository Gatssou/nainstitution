<?php

$userid = $_GET['id'];
$tokenconf = $_GET['token'];

echo $userid . '<br>' . $tokenconf;

if(!empty($tokenconf) && !empty($userid)){
    try{
    require './bdd.php';
    $pdo->prepare("UPDATE exusers SET conftoken = 0, tokenconfirmed = NOW() WHERE id = $userid")->execute();
    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        $pdo = null;
         header('Location:../login.php');
    }
}else{
    header('Location:../insc.php');
}