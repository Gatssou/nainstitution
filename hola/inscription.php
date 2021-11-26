<?php
session_start()
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
         <section class="zindex">
	
	<form class="labin" action="inscription_traitement.php" method="post">
		

		<div class="inpdec">
			<i class="far fa-user"></i>
			<input type="text" onclick="blurEffect()" class="decou" name="pseudo" id="pseudo" placeholder="Pseudo" required />
		</div>

		<div class="inpdec">
			<i class="far fa-envelope"></i>
			<input type="text" onclick="blurEffect()" class="decou" name="email" placeholder="Email" required id="email"  />
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>
			<input type="password" onclick="blurEffects()" class="decop" name="password" placeholder="Password" id="password" required />
		</div>

		<div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" onclick="blurEffects()" name="password_retype" class="decop" placeholder="Confirm Pass" autocomplete="off" required="required">
        </div>

		<input type="submit" name="submit" value=">" class="logbtn" />
		<p class="box-register">Déjà inscrit? <br> <a class="dec" href="./connexion.php">Connectez-vous ici</a></p>
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
</section>

</body>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/login.js"></script>
<script src="./index.js"></script>
</html>
     
   
  
