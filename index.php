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
    <div class="toggle"><img src="./img/img_index/reticule.png" alt=""></div>
       <div class="menu">
        <li style="--i:0;">
        <a href="#"><ion-icon name="accessibility-outline"></ion-icon></a>
        </li>
        <li style="--i:1;">
        <a href="./php/index.php"><img src="./img/index/home.png" alt=""></a>
        </li>
        <li style="--i:2;">
        <a href="./php/perspec.php"><ion-icon name="barbell-outline"></ion-icon></a>
        </li>
        <li style="--i:3;">
        <a href="./personnage.php"><ion-icon name="at-outline"></ion-icon></a>
        </li>
        <li style="--i:4;">
        <a href="./personnagef.php"><ion-icon name="rocket-outline"></ion-icon></a>
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
    <div class="publicite">
     
    <img src="" alt="" height="100px" width="100px"  > <img src="" alt="" height="100px" width="100px" > <img src="" alt="" height="100px" width="100px" > <img src="" alt="" height="100px" width="100px" > <img src="" alt=""> <img src="" alt=""height="100px" width="100px" > <img src="" alt=""height="100px" width="100px" > <img src="" alt=""height="100px" width="100px" >

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
<div class="selectionner">
    <h1 class="selec"> Selectionner  </h1>
        </div>
            <div class="tout">
               <div class="suivant"><a href="./personnage.php"><img  src="./img/img_log/homme.png" alt=""></a></div>
                   <div class="suivante"><a href="./personnagef.php"><img  src="./img/img_log/femme.png" alt=""></a></div>
      </div>
  
 <div class="next">
      <a href="./personnage.php" class="avant" onclick="boutonAvant()"><ion-icon name="accessibility-outline"></ion-icon></a>
          <a href="./personnagef.php" class="apres" onclick="boutonApres()"><ion-icon name="accessibility-outline"></ion-icon></a>
 </div>

 <section class="hop">
      <div class="peut">
          <p><a href="./include/articlepage/fonctionform.php">Lien vers formulaire FAQ</a></p>
 </div>
 </section>
 <footer>
 <a href="./include/disconnect.php">Se déconnecter</a>
 </footer>
    </body>
    <script src="./js/personnage.js"></script>
</html>