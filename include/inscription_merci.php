<?php


if(isset($_GET['conftoken'])){
    $conftoken = htmlspecialchars($_GET['conftoken']);
    $conftoken = urldecode($conftoken);
    $conftoken = base64_decode($conftoken);

    $check = $pdo->prepare("SELECT * FROM Membre WHERE email LIKE $mail ");
    $check->execute(array($mail));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == NULL){
        if($data['roletype'] == NULL){
            $update = $pdo->prepare('UPDATE logtest SET roletype = 1 WHERE conftoken = ?');
            echo "Compte verifie avec succes !";
        }else{
            echo "Compte deja verifie";
        }
    }echo 'compte déjà existant'
}
?>
  if(isset($_POST['email']))
{

    try {
        $ch = $pdo->prepare('SELECT email FROM logtest WHERE email = ?');
        $ch->bindParam(1, $_POST['email']); 
        $ch->execute();
        while($row = $ch->fetch(PDO::FETCH_ASSOC)) {

        }
    }
    catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

if($ch->rowCount() > 0){
    echo "The record exists!";
} else {
    echo "The record is non-existant.";
}


}