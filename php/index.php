<?php
session_start();
require_once 'bdd.php';
?>

<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="../Photos/pokeball-5128709_960_720.webp" type="image">
      <link rel="stylesheet" href="../fa/css/all.css">
      <link rel="stylesheet" href="../sass/login.css">
   
      <title></title>
   </head>
   <body>
   <section class="zindex">
       <?php
       if(isset($_GET['login_err'])){
           $err = htmlspecialchars($_GET['login_err']);
           switch($err){
            case 'password': ?>
            <div class="alert alert_danger">
                <strong>error</strong>mot de pass invalide
            </div> 
            <?php
            break;

            case 'email': ?>
            <div class="alert alert_danger">
                <strong>error</strong>email de pass invalide
            </div> 
            <?php
            break;

            case 'already': ?>
            <div class="alert alert_danger">
                <strong>error</strong>compte de pass invalide
            </div> 
            <?php
            break;
       } 
    }
       ?>

    <form class="labin" method="POST" action="co.php">
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" size="20px" name="user" class="decou" placeholder="Username" required>
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" class="decop" placeholder="Password" required>
        </div>

        <a href="#" class="forgotpass">Forgot password ?</a>
        <input type="submit" class="logbtn" name="login" value="Login">
                    
        <p class="log_reg">Dont' have an account ? <a href="./register.php">Register here !</a></p>
    </form>
   
</section>
      
   </form>
   </body>
   <script src="../index.js"></script>
</html>
