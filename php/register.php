<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=nains;charset=utf8;', 'root');
if(isset($_POST['envoi'])){
    if(!empty($_POST['username']) AND !empty($_POST['password'])AND !empty($_POST['email'])){
        $pseudo = htmlspecialchars($_POST['username']);
        $password = sha1($_POST['password']);
            $insertUser = $bdd->prepare('INSERT INTO utilisateurs(username, password)VALUES(?, ?)');
           $insertUser->execute(array($pseudo, $password, $email));

$recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
$recupUser->execute(array($username, $password));
if($recupUser->rowCount() > 0){
           $_SESSION['username'] = $username;
           $_SESSION['password'] = $password;
           $_SESSION['id'] = $recupUser->fetch()['id'];
}
         
         
    }else{
        echo "veuillez completer tous merci...";
    }
}
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
<?php
         if(isset($_GET['reg_err'])){
            $err = htmlspecialchars($_GET['reg_err']);
            switch($err){
               case 'success':
                ?>
      <div class="alert alert_success">
         <br><strong>Succès</strong>inscription réussie !
      </div>
      <?php
         break;
               case 'password':
                ?>
      <div class="alert alert_danger">
         <br><strong>error</strong>mot de pass different!
      </div>
      <?php
         break;

               case 'email':
                ?>
      <div class="alert alert_danger">
         <br><strong>error</strong>email non valide !
      </div>
      <?php
         break;
               case 'email_length':
                ?>
      <div class="alert alert_danger">
         <br><strong>error</strong>email trop long !
      </div>
      <?php
         break;
               case 'username_length':
                ?>
      <div class="alert alert_danger">
         <br><strong>error</strong>pseudo trop long !
      </div>
      <?php
         break;
         
         case 'already':
            ?>
      <div class="alert alert_danger">
         <br><strong>Erreur</strong> : compte déjà existant!
      </div>
      <?php
         break;
         }
         }
         ?>
    <form class="labin" action="" method="POST">
       
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" size="20px" name="username" autocomplete="off" class="decou" placeholder="Username" required>
        </div>
      
        <div class="inpdec">
            <i class="far fa-envelope"></i>
            <input type="email" size="20px" name="email" class="decou" placeholder="E-mail" autocomplete="off" required>
        </div>
      
        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" autocomplete="off" class="decop" placeholder="Password" required>
        </div>
        
        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="password"  autocomplete="off" class="decop" placeholder="Confirm Password" required>
        </div>
        
        <input type="submit" class="logbtn" name="login" value="Login">
        </form>
        <p class="log_reg">Have an account ? <a href="./index.php">Login here !</a></p>
      
</section>


    
</body>
</html>