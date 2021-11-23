<?php
require('config.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn,$query));
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location:./index.php");
	}else{
		$image = "./img/maquenoir.jpg";
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../sass/login.css">
	<link rel="stylesheet" href="../fa/css/all.css">
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
	<form class="labin" action="" method="post">
			
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

		<p class="box-register">Vous êtes nouveau ici? <a class="dec" href="register.php">S'inscrire</a></p>
		

	<article class="errmess">
		<?php if (! empty($message)) { ?>
			<div class="cross">
				<h1 class="err" style="background: blue;">Err 404<i class="fas fa-times first"></i></h1>
		
				<p class="errorMessage"><i class="fas fa-times redfa"></i><?php echo $message; ?></p>
				<input type="submit" name="submit" value="Noob !" class="noob">
			</div>
		<?php } ?>
		<?php if (! empty($image)) { ?>
			<img class="logerror" src="./img/203905.webp" alt="">
		<?php } ?>
	</article>

	</form>
			
			</section>


</body>
<script src="../js/js stock/jquery-3.6.0.min.js"></script>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="./index.js"></script>
<script src="../js/login.js"></script>
</html>