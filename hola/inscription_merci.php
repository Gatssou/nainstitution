<?php
   session_start();
   if(!isset($_SESSION['user']))
   ?>
       <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./fa/css/all.css">
	<link rel="stylesheet" href="./sass/login.css">
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
	
	
</section>
<div class="prout">
   <div class="container2">
      <h1>Inscription bien envoyé</h1>
      <p>Merci d'avoir pris le temps de remplir la page d'inscription <br>Vous pouvez maintenant vous connectez.</p>
      <div class="redirection_connexion">
         <a href="./connexion.php">Retour a la connexion</a>
      </div>
   </div>
</body>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/login.js"></script>
<script src="./index.js"></script>



</html>