<?php 
session_start();
require_once './config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Fa/css/all.css">
    <link rel="stylesheet" href="../sass/login.css">
    <title>Document</title>
</head>
<body>
<section>
    <div class="animation-wrapper">
      <div class="particle particle-1"></div>
      <div class="particle particle-2"></div>
      <div class="particle particle-3"></div>
      <div class="particle particle-4"></div>
    </div>
</section>
    
<section class="zindex">
<?php
    if(isset($_GET['login_err']))
    {
        $err = htmlspecialchars($_GET['login_err']);

        switch($err)
        {
            case 'password':
                ?>
                <div class="alert alert-danger">
                    <strong>Error</strong> password invalide
                </div>
                <?php
                break;

            case 'email':
                ?>
                <div class="alert alert-danger">
                    <strong>Error</strong> email invalide
                </div>
                <?php
                break;

            case 'already':
                ?>
                <div class="alert alert-danger">
                    <strong>Error</strong> accound doesn't exist
                </div>
                <?php
                break;
            }
        }
    ?>
    
    <form class="labin" method="POST" action="./connexion.php" novalidate>
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

        <a href="#" class="forgotpass">Forgot password ?</a>
        <input type="submit" class="logbtn" name="login" value="Login">
                    
        <p class="log_reg">Dont' have an account ? <a href="./inscription.php">Register here !</a></p>
    </form>
         
</section>
</body>
</html>