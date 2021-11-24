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
   $pdo= new PDO("mysql:host=localhost;dbname=nains", 'root');
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        // Patch XSS
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $pdo->prepare('SELECT username, email, password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0)
        { 
           
            if(strlen($username) <= 100)
            { // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100)
                { // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    { // Si l'email est de la bonne forme
                        if($password == $password_retype)
                        { // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                        
                            $password = hash('sha256', $password);
                            
                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR']; 

                            // On insère dans la base de données
                            $insert = $pdo->prepare('INSERT INTO users (username, email, password, ip, token) VALUES(:username, :email, :password, :ip, :token)');
                            $insert->execute(array(
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip,
                                'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            // On redirige avec le message de succès
                            header('Location:login.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=username_length'); die();}
        }else{ echo 'vous êtes deja inscrit' ; die(); }
    }
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

</body>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/login.js"></script>
<script src="./index.js"></script>
</html>