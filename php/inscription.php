<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link rel="stylesheet" href="../../fa/css/all.css">
            <link rel="stylesheet" href="../sass/login.css">
            <title>Inscription</title>
        </head>
        <body>
        <div class="zindex">
        <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);
                       switch($err)
                    {
                           case 'success':
                        ?>
                               <div class="alert alert-success">
                                   <strong>Succès</strong> inscription réussie !
                    </div>
                            <?php
                                  break;

                                     case 'password':
                            ?>
          <div class="alert alert-danger">
                 <strong>Erreur</strong> mot de passe différent
                         </div>
                                      <?php
                                            break;

                                                 case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            
            <form class="labin" action="./inscription_traitement.php" method="post">
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" size="20px" name="pseudo" class="decou" placeholder="Pseudo" autocomplete="off" required="required">
        </div>

        <div class="inpdec">
            <i class="far fa-envelope"></i>
            <input type="email" size="20px" name="email" class="decou" placeholder="Email" autocomplete="off" required="required">
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="decop" placeholder="Password" autocomplete="off" required="required">
        </div>
        
        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_retype" class="decop" placeholder="Confirm Password" autocomplete="off" required="required">
        </div>
        
        <input type="submit" class="logbtn" name="submit" value="Login">
        
        <p class="log_reg">Have an account ? <a href="./index.php">Login here !</a></p>
        </form>
            </div>
        
        </body>
</html>