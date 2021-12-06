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
	<link rel="stylesheet" href="../fa/css/all.css">
	<link rel="stylesheet" href="../sass/login.css">
	<title>Document</title>
</head>
  <body id="bili">

<div class="insc">
   <div class="merci">
      <h1>Inscription bien envoyé</h1>
      <img src="../img/img_log/wrong-pass.jpg" alt="" class="">
      <div class="redirection_connexion">
         <a href="../login.php">Retour a la connexion</a>
      </div>
   </div>
</body>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/login.js"></script>
<script src="./index.js"></script>



</html>