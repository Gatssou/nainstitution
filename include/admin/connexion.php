<?php
session_start();
require '../bdd.php';
/* à l'activation du bouton valider on confirme les informations suivantes ce qui entraîne l'erreur ou la connexion avec une définition déjà donnée pseudo mdp */
if(isset($_POST['valider'])) {
     if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
$pseudo_par_defaut = "Gudule";
$mdp_par_defaut = "A15H17luma";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars(($_POST['mdp']));
             if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
                 $_SESSION['mdp'] = $mdp_saisi;
                 header('location: indexad.php');

             }else{
                header('location:connexion.php?log_err=1');
             }
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/terread.gif" type="image">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../../fa/css/all.min.css">

    <title>Administrateurs</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: white;
            transition: 0.5s;
        }

        body.active {
            background: black;
        }

        #toggle {
            position: relative;
            display: block;
            width: 20px;
            height: 20px;
            border-radius: 16px;
            background: white;
            transition: 0.5s;
            cursor: pointer;
        }

        #toggle.active {
            background: black;
            color: red;
        }

        #toggle .inducator {
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            background: linear-gradient(to bottom, #444, #222);
            border-radius: 50%;
            transform: scale(0.9);
            transition: 0.5s;
        }

        #toggle.active .inducator {
            left: 199vh;
            background: grey;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1),
                inset 0 4px 4px rgba(255, 255, 255, 1),
                inset 0 -4px 4px rgba(255, 255, 255, 1);
        }

        input {
            background: white;
        }
        .better {
            border: 1px solid black;
        }
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40vw;
            height: 50vh;
            margin-top: 10%;
            margin-left: 30%;
            border: 1px white ridge;
            border-radius: 12px 5px 5px 12px;
            box-shadow: 0 5px 10px 5px white;
        }
        input {
            border: 2px solid grey;
            height: 4vh;
            width: 15vw;
            margin: 2vh;
            border-radius: 10px;
            font-size: 1.5em;
            text-align: center;
            z-index: 1000;
        }

        .congrat {
            color: white;
        }

        .errmessadmin {
            color: red;
            height: 5vh;
            text-align: center;
            border-radius: 0 0 15px 15px;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .envoie {
            width: 3vw;
            border: 1px solid black;
            font-size: .8em;
            z-index: 1001;
        }
        .envoie:hover {
            transition: 1.5s ease-in-out;
            background-color: yellow;
        }
        .log {
            font-size: 1.3em;
            margin-right: 33vw;
        }
        .log.active {
            color: white;
        }
        ::placeholder {
            text-align: center;
            font-size: 1em;
        }
        a {
            text-decoration: none;
            color: black;
        }
        .line {
            z-index: 1;
            width: 20vw;
            margin-left: 19vw;
            margin-top: -25vh;
        }
        footer{
            width: 15vw;
        }
        @media screen and (max-width: 700px){
            .better{
                width: 70vw;
                margin-left: 15vw;
                margin-top: 20vh;
            }
            .line{
                width: 45vw;
                margin-top: -10vh;
            }
            input{
                width: 40vw;
            }
            .envoie{
                width: 15vw;
            }
        }
    </style>

    <div id="toggle">
        <i class="inducator"></i>
    </div>
    <form class="better" action="" method="POST">
    <section class="errmessadmin">
            <a class="log" href="/nainstitution/pub.php">Page Login</a>
            
            <?php
    if(isset($_GET['log_err'])){
        $e = $_GET['log_err'];
       if($e == 1){
           echo 'Bad use or bad Mdp';
       }
    }
?>
        </section>

        <div class="congrat">
            <h1>Admin Up! ! !</h1>
        </div>
        <input type="text" name="pseudo" autocomplete="off" placeholder="Pseudo">

        <input type="password" name="mdp" autocomplete="off" placeholder="Mot de passe">

        <input class="envoie" type="submit" name="valider">
        <img class="line" src="../../img/img_log/black_line.png" alt="">
        
    </form>
    
</body>
<script>
    const body = document.querySelector('body');
    const log = document.querySelector('.log');
    const line = document.querySelector('.line');

    const toggle = document.getElementById('toggle');
    toggle.onclick = function () {
        toggle.classList.toggle('active');
        body.classList.toggle('active');
        log.classList.toggle('active');
        line.classList.toggle('active');
    }
</script>

</html>