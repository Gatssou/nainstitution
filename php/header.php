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
<body>
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
	
	<form class="labin" action="./include/inscript.php" method="POST">
		

		<div class="inpdec">
			<i class="far fa-user"></i>
			<input type="text" onclick="blurEffect()" class="decou" name="pseudo" id="pseud" required pattern="^[A-Za-zÀ-ÿ'-]+$" max="20" placeholder="Pseudo" required />
		</div>

		<div class="inpdec">
			<i class="far fa-envelope"></i>
			<input type="email" onclick="blurEffect()" class="decou" name="email" id="email" required pattern="^[A-Za-z0-9'_.-]+@{1}[A-Za-z0-9]+\.[A-Za-z]{2,}$"  placeholder="Email" >
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>
			<input type="password" onclick="blurEffects()" class="decop"  placeholder="Password"  required
			name="mdp" id="motdpe" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,24}$"> />
		</div>

		<div class="inpdec">
            <i class="fas fa-lock"></i>
			<input type="password" onclick="blurEffects()" class="decop"  placeholder="Password" required
			name="mdpconf" id="motdpec" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,24}$"> />
        </div>

		<input type="submit" name="submit" value=">" class="logbtn" />
		<p class="box-register">Déjà inscrit? <br> <a class="dec" href="./login.php">Connectez-vous ici</a></p>
	
	</form>
</section>


    
