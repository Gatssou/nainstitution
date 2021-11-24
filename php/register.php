<?php 
session_start();
require_once 'config.php';
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
	<title>Document</title>
</head>
<body id="bili">
<section class="zindexbis">

<input type="checkbox" id="switch">
	<div class="app">
	    <div class="content">
	      <label  for="switch">
	        <div class="toggle"></div>
	        <div class="names">
				<p class="styl" id="day" onclick="lightTheme()">Light</p>
				<p class="styn" id="night" onclick="darkTheme()">Dark</p>
	        </div>
	      </label>
	    </div>
	</div>
</section>
<div id="root"></div>
<div class="hoo"><span class="timer"></span></div>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='success'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>
<section class="zindex">
	
	<form class="labin" action="" method="post">
		

		<div class="inpdec">
			<i class="far fa-user"></i>
			<input type="text" onclick="blurEffect()" class="decou" name="username" placeholder="Pseudo" required />
		</div>

		<div class="inpdec">
			<i class="far fa-envelope"></i>
			<input type="text" onclick="blurEffect()" class="decou" name="email" placeholder="Email" required />
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>
			<input type="password" onclick="blurEffects()" class="decop" name="password" placeholder="Password" required />
		</div>

		<div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" onclick="blurEffects()" name="password_retype" class="decop" placeholder="Confirm Pass" autocomplete="off" required="required">
        </div>

		<input type="submit" name="submit" value=">" class="logbtn" />
		<p class="box-register">Déjà inscrit? <br> <a class="dec" href="login.php">Connectez-vous ici</a></p>
	</form>
</section>
<?php } ?>
</body>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/login.js"></script>
<script src="./index.js"></script>
</html>