<?php
session_start();
require './include/functions.php';
logged_only();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/reliephpindex.css">
   <script src="./js/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>

    <!-- blipou -->
       
    <ul id="menu-demo2">
        <li><a href="#">Personnalisation</a>
          <ul>
            <li><a href="#"><img src="./img/img_log/jurassic.png" height="80px" width="90px" alt=""></a>
            </li>
            <li><a href="#">lien sous menu 1</a></li>
            <li><a href="#">lien sous menu 1</a></li>
            <li><a href="#">lien sous menu 1</a></li>
           
          </ul>
        </li>
        <li><a href="#">Tête</a>
          <ul>
            <li><a href="#"><img src="./img/img_log/darkvador.jpg" height="80px" width="90px" alt=""></a></li>
            <li><a href="#">Lien sous menu 2</a></li>
            <li><a href="#">Lien sous menu 2</a></li>
            <li><a href="#">Lien sous menu 2</a></li>
          </ul>
        </li>
        <li><a href="#">Habits</a>
          <ul>
            <li><a href="#"><img src="./img/img_log/wrong-pass.jpg" height="80px" width="90px" alt=""></a></li>
            <li><a href="#">lien sous menu 3</a></li>
            <li><a href="#">lien sous menu 3</a></li>
            <li><a href="#">lien sous menu 3</a></li>
          </ul>
        </li>
      
      </ul>

    
       <div class="menu">
        <div class="toggle"><img src="./img/img_index/reticule.png" alt=""></div>
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

<p class="legende">Personnages</p>
<div class="selectionner">
  <h1 class="selec"> Selectionner  </h1>
</div>
      <div class="tout">
      
       <div class="suivant"><img  src="./img/img_log/homme.png" alt=""></div>
        <div class="suivante"><img  src="./img/img_log/femme.png" alt=""></div>
      
      </div>
  
      <div class="next">
        <a href="./personnage.php" class="avant" onclick="boutonAvant()"><ion-icon name="accessibility-outline"></ion-icon></a>
        <a href="./personnagef.php" class="apres" onclick="boutonApres()"><ion-icon name="accessibility-outline"></ion-icon></a>
      </div>
 <footer>
 <a href="./include/disconnect.php">Se déconnecter</a>
 </footer>
    </body>
    <script>
  $(window).scroll(function(){
    let scrollPos = $(this).scrollTop();
   // console.log(scrollPos);
   $('body').css({
     'background-size' : 100 + scrollPos + '%'
   })
  })
</script>
    <script src="./js/personnage.js"></script>
</html>