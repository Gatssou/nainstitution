<?php
session_start();
require_once 'bdd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fa/css/all.css">
    <link rel="stylesheet" href="../sass/login.css">
    <title>Nains</title>
</head>
<body>

    
<section class="zindex">
    <img src="" alt="">
    <form class="labin" action="./login.php" method="post">
       
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" size="20px" name="user" class="decou" placeholder="Username" required>
        </div>

        <div class="inpdec">
            <i class="far fa-envelope"></i>
            <input type="email" size="20px" name="email" class="decou" placeholder="E-mail" required>
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="decop" placeholder="Password" required>
        </div>
        
        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="decop" placeholder="Confirm Password" required>
        </div>
        
        <input type="submit" class="logbtn" name="login" value="Login">
        </form>
        <p class="log_reg">Have an account ? <a href="./login.php">Login here !</a></p>
      
</section>
<?php
         if(isset($_GET['reg_err'])){
            $err = htmlspecialchars($_GET['reg_err']);
         
            switch($err){
               case 'success':
                ?>
      <div class="alert_danger">
         <br><strong>Succès</strong>inscription réussie !
      </div>
      <?php
         break;
         
         case 'already':
            ?>
      <div class="alert_danger">
         <br><strong>Erreur</strong> : email/mot de passe/pseudo deja utilisé
      </div>
      <?php
         break;
         }
         }
         ?>

    
</body>
</html>