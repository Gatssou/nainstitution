<?php
session_start();
if(!isset($_SESSION['user']))
?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../sass/login.css">
	<link rel="stylesheet" href="../fa/css/all.css">
      <title></title>
   </head>
   <main>
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
<section class="zindex">
	<form class="labin" action="connexion.php" method="post">
			
		<div class="inpdec">
			<i class="far fa-user"></i>
			<input type="text" onclick="blurEffect()" class="decou" name="username" placeholder="Pseudo" required />
		</div>

		<div class="inpdec">
			<i class="far fa-envelope"></i>
			<input type="text" onclick="blurEffect()" id="input" class="decou" name="email" placeholder="Email" required />
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>
			<input type="password" onclick="blurEffects()" class="decop" name="password" placeholder="Password" required />
		</div>

		<div class="passforgot">
			<!-- <a class="fgtp" href="./">Forgot Pass ?</a> -->
			<input type="submit" name="submit" value=">" class="logbtn" />
		</div>

		<p class="box-register">Vous êtes nouveau ici? <a class="dec" href="inscription.php">S'inscrire</a></p>
		
      <?php
                  if(isset($_GET['login_err'])){
                     $err = htmlspecialchars($_GET['login_err']);
                  
                     switch($err){
                        case 'password':
                           ?>
               <div class="alert_danger">
                  <br><strong>Erreur</strong> : mot de passe incorrect
               </div>
               <?php
                  break;
                  
                  case 'email':
                  ?>
               <div class="alert_danger">
                  <br><strong>Erreur</strong> : email icorrect
               </div>
               <?php
                  break;
                  
                  case 'already':
                  ?>
               <div class="alert_danger">
                  <br><strong>Erreur</strong> : compte non existant
               </div>
               <?php
                  break;
                  
                  }
                  }
                  ?>
	</form>
			
			</section>

			</main>
</body>
<script src="../js/js stock/jquery-3.6.0.min.js"></script>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/index.js"></script>
<script src="../js/login.js"></script>
</html>
             