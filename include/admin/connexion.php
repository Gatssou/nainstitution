<?php
session_start();
require '../bdd.php';

if(isset($_POST['valider'])) {
     if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
$pseudo_par_defaut = "admin";
$mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars(($_POST['mdp']));
             if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
                 $_SESSION['mdp'] = $mdp_saisi;
                 header('location: indexad.php');

             }else{
                 echo "votre mot de pass est incorrecte";
             }
 }else{
     echo "veuillez compléter tous les champs...";
 
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: black;
            text-align: center;
            justify-content:center;
            display: flex;
      

        }
       input{
         background: white;
        }
        form{
            margin-top:25%;
        }
        .congrat{
            color: white;
        }

    </style>
 
    <form action="" method="POST" >
    <div class="congrat">
        <h1>CONGRATULATION ! ! !</h1>
    </div>
        <input type="text" name="pseudo"  autocomplete="off" placeholder="pseudo">
        <br>
        <input type="password" name="mdp" autocomplete="off" placeholder="mot de pass">
        <br><br>
        <input type="submit"  name="valider">
</form>
</body>
</html>