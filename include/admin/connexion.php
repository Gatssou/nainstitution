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
    <link rel="stylesheet" href="./css/index.css">
  
    <title>Document</title>
</head>
<body>
    <style>
     
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
   transition: 0.5s;
        }

body.active{
    background: black; 
}
#toggle{
    position: relative;
    display: block;
    width: 20px;
    height: 20px;
    border-radius: 16px;
    background: white;
    transition: 0.5s;
    cursor: pointer;
}
#toggle.active{
    background: black;
    color: red;
}
#toggle .inducator{
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    background: linear-gradient(to bottom, #444,#222);
    border-radius: 50%;
    transform: scale(0.9);
    transition: 0.5s;
}
#toggle.active .inducator{
    left:199vh;
    background: grey;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1),
                inset 0 4px 4px rgba(255,255,255,1),
                inset 0 -4px 4px rgba(255,255,255,1);
}
       input{
         background: white;
        }
        form{ 
            display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
            width: 40vw;
            height: 50vh;
            margin-top:10%;
            margin-left: 35%;
            border: 1px white ridge;
            border-radius: 12px  5px 5px 12px;
            box-shadow: 10px  1px 1px 1px white;
        }
        .congrat{
            color: white;
        }
        .motdepass{
            background-color: white;
            border-radius: 5px;
        }
        .errmessadmin{
  color: red;
  height: 5vh;
  opacity: 0.5;
  width: 17vw;
  text-align: center;
  border-radius: 0 0 15px 15px;
  justify-content: center;
  align-items: center;
  display: flex;
}
    </style>
   <div id="toggle">
        <i class="inducator"></i>
    </div>
    <form action="" method="POST" >
    <div class="congrat">
        <h1>Admin Up! ! !</h1>
    </div>
        <input class="motdepass" type="text" name="pseudo"  autocomplete="off" placeholder="pseudo">
        <br>
        <input class="motdepass" type="password" name="mdp" autocomplete="off" placeholder="mot de pass">
        <br><br>
        <input class="motdepass" type="submit"  name="valider">
        <section class="errmessadmin">
<?php
    if(isset($_GET['log_err'])){
        $e = $_GET['log_err'];
       if($e == 1){
           echo 'Bad use or bad Mdp';
       }
    }
?>
</section>
</form>
</body>
<script>
        const body = document.querySelector('body');
    
        const toggle = document.getElementById('toggle');
        toggle.onclick = function(){
            toggle.classList.toggle('active');
            body.classList.toggle('active');
        }
 
    </script>
</html>