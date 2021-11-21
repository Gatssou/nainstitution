<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reliephpindex.css">
    <title>Document</title>
</head>
<body>
    <header>
       
	   <div class="nav-elements">
		 <li class="un"><a href="">JOUER</a></li>
		   <li class="deux"><a href="">PERSONNALISER</a></li>
		   <li class="trois"> <a href="">COMMUNAUTÉ</a></li>
		   <li class="quatre"><a href="">BOUTIQUE</a></li>
	   </div>
	   <div class="menu">
        <div class="toggle"> <img src="./img/têtev2.png" alt=""></div>
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
        <a href="#"><ion-icon name="sparkles-outline"></ion-icon></a>
        </li>
    </div>
	   <div class="projectbox"><a href="#">Enlever le tableau</a></div>
<div class="projet">
  <p> <div id="content">
	   <a href="#nav"><span>Tableau de Bord</span></a>
		   <div class="expandable" id="nav" style="cursor: pointer">
				   <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
				   <p>C'est votre tableau de bord.</p>
				   <a href="logout.php">Déconnexion</a>
				   </div>
	   </div></p>
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
 
	</body>
</html>