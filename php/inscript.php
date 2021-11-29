<?php
require './functions.php';

if(!empty($_POST["pseudo"]) && !empty($_POST["email"])){
    function cleandata($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $usname = cleandata($_POST['pseudo']);
    $mail = cleandata($_POST['email']);

}else{
    header("location:../insc.php");
   // echo 'pas bon les données';
}

if(!empty($_POST['mdp']) && !empty($_POST['mdpconf']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdp']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST["mdpconf"]) && $_POST['mdp'] === $_POST['mdpconf']){

    $pass = $_POST["mdp"];
    $hashed = password_hash($pass, PASSWORD_BCRYPT);

}else{
    header('location:../insc.php');
   // echo 'pas bon le mdp';
}

if(!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)){
    try{
        require_once './include/bdd.php';
        $req = $pdo->prepare("INSERT INTO exusers(username, password, conftoken, email) VALUES(:username, :password, :conftoken, :email)");
        $tok = token(60);
        $req->bindParam(':username', $usname);
        $req->bindParam(':password', $hashed);
        $req->bindParam(':conftoken', $tok);
        $req->bindParam(':email', $mail);
        $req->execute();

    }catch(PDOException $e){
        echo "Erreur : " . $e;
    }finally{
        $usid = $pdo->lastInsertId();
        $pdo = null;
        echo "t'as reach le summit";
       header("location:./confirm.php?id=" . $usid . "&token=" . $tok);
    }
}else{
    header("location:../insc.php");
    //echo 'pas bon la verif';
}




?>