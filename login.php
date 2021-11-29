
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./sass/login.css">
	<link rel="stylesheet" href="./fa/css/all.css">
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
<section class="zindex">
	<form class="labin" action="./include/log.php" method="post">
			
		<div class="inpdec">
			<i class="far fa-user"></i>
          
			<input type="text" onclick="blurEffect()" class="decou" placeholder="Username" name="pseudo" id="pseud" required pattern="^[A-Za-zÀ-ÿ'-]+$">
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>
         
			<input type="password" onclick="blurEffects()" class="decop"  placeholder="Password" required name="motdedep" id="motdp" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,24}$"> />
		</div>

		<div class="passforgot">
			<!-- <a class="fgtp" href="./">Forgot Pass ?</a> -->
           
			<input type="submit" name="submit" value=">" class="logbtn" />
		</div>

		<p class="box-register">Vous êtes nouveau ici? <a class="dec" href="./insc.php">S'inscrire</a></p>
	

	</form>
			
			</section>


</body>
<script src="../js/js stock/jquery-3.6.0.min.js"></script>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/index.js"></script>
<script src="../js/login.js"></script>
</html>