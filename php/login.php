<?php
session_start()
?>
<?php
require_once '../index.php';
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
    <img src="" alt="">
    <form class="labin" method="POST" action="./logtx.php">
        <img src="../logpic/team.png" class="piclog" alt="">
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
   </form>
   </body>
   <script src="../index.js"></script>
</html>