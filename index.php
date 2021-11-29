<?php
session_start();
require './php/functions.php';
logged_only();
?>

<h1>Si vous êtes ici c'est que vous êtes connecté</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/reliephpindex.css">
    <title>Document</title>
</head>
<body>
    <header>
       
	   <nav class="nav-elements">
		 <li class="un"><a href="">JOUER</a></li>
		   <li class="deux"><a href="">PERSONNALISER</a></li>
		   <li class="trois"> <a href="">COMMUNAUTÉ</a></li>
		   <li class="quatre"><a href="">BOUTIQUE</a></li>
    
	   </nav>
	   <div class="menu">
        <div class="toggle"><img src="./img/img_index/têtev2.png" alt=""></div>
        <li style="--i:0;">
        <a href="#"><ion-icon name="accessibility-outline"></ion-icon></a>
        </li>
        <li style="--i:1;">
        <a href="#"><ion-icon name="at-outline"></ion-icon></a>
        </li>
        <li style="--i:2;">
        <a href="#"><ion-icon name="barbell-outline"></ion-icon></a>
        </li>
        <li style="--i:3;">
        <a href="#"><ion-icon name="at-outline"></ion-icon></a>
        </li>
        <li style="--i:4;">
        <a href="#"><ion-icon name="rocket-outline"></ion-icon></a>
        </li>
        <li style="--i:5;">
        <a href="#"><ion-icon name="sparkles-outline"></ion-icon></a>
        </li>
        <li style="--i:6;">
        <a href="#"><ion-icon name="sparkles-outline"></ion-icon></a>
        </li>
        <li style="--i:7;">
        <a href="./php/disconnect.php"><ion-icon name="sparkles-outline"></ion-icon></a>
       
        </li>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let toggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu');
        toggle.onclick = function(){ 
            menu.classList.toggle('active')
        }
            
    </script>


	  
	
 </header>
 <a href="./php/disconnect.php">Se déconnecter</a>
	</body>
</html>





