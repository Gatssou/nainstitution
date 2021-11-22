<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
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
	    header("Location: index.php");
	}else{
		$image = "./img/maquenoir.jpg";
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<section class="zindex">
	<form class="labin" action="" method="post">
		<h1 class="box-logo box-title"><a class="dec" href="">Pologne_Powa</a></h1>
		<h1 class="box-title">S'inscrire</h1>

		<div class="inpdec">
			<i class="far fa-user"></i>
			<input type="text" class="decou" name="username" placeholder="Nom d'utilisateur" required />
		</div>

		<div class="inpdec">
			<i class="far fa-envelope"></i>
			<input type="text" class="decou" name="email" placeholder="Email" required />
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>
			<input type="password" class="decop" name="password" placeholder="Mot de passe" required />
		</div>

		<input type="submit" name="submit" value="S'inscrire" class="logbtn" />

		<p class="box-register">Vous êtes nouveau ici? <a class="dec" href="register.php">S'inscrire</a></p>
	<?php if (! empty($message)) { ?>
		<p class="errorMessage"><?php echo $message; ?></p>
	<?php } ?>
	<?php if (! empty($image)) { ?>
		<img src="./img/maquenoir.jpg" alt=""><?php echo $message; ?></p>
	<?php } ?>

	</form>
</section>
</body>
</html>