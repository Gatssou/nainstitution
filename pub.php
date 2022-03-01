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
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <script src="./js/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
</style> 
<div class="titree">
  <p class="n">N</p><p class="a">A</p><p class="i">I</p><p class="n">N</p><p class="v">V</p><p class="e">E</p><p class="i">N</p><p class="t">T</p><p class="u">U</p><p class="r">R</p><p class="a">A</p>
</div>
    <!-- blipou -->
    <button type="boutton" class="toggle"><img src="./img/img_index/menu.png" alt=""></button>
      <section>
    <div class="menu"  >
        <li style="--i:0;" >
        <a href="./include/articlepage/fonctionform.php"><img src="./include/articlepage/Img/mail.png" height="70px" width="70px" alt=""></a>
        </li>
        <li style="--i:1;">
        <a href="./php/index.php"><img src="./img/index/home.png" alt=""></a>
        </li>
        <li style="--i:2;">
        <a href="./personnagef.php"><img src="./img/img_index/femme.png" height="80px" width="80px" alt=""></a>
        </li>
        <li style="--i:3;">
        <a href="./personnage.php"><img src="./img/img_index/Sans titre.png" height="100px" width="110px" alt=""></a>
        </li>
        <li style="--i:4;">
        <a href=""><img src="./img/img_index/kitsurvie.png" height="80px" width="80px" alt=""></a>
        </li>
        <li style="--i:5;">
        <a href="./include/articlepage/envoief.php"><img src="./img/img_index/faq.png" alt=""></a>
        </li>
        <li style="--i:6;">
        <a href="./include/admin/connexion.php"><img src="./img/index/enigme.png" height="80px" width="80px" alt=""></a>
        </li>
        <li style="--i:7;">
        <a href="./include/disconnect.php"><img src="./img/index/logout.png" height="80px" width="80px" alt=""></a>
        </li>
    </div>
    </section>
    <div class="publicite">
     <div class="hover-effect">
    <a href=""><img src="./img/imgbg/13.jpg" alt="" height="100px" width="100px"  ></a> <a href=""><img src="./img/imgbg/14.jpg" alt="" height="100px" width="100px" ></a> <a href=""><img src="./img/imgbg/15.jpg" alt="" height="100px" width="100px" ></a> <a href=""><img src="./img/imgbg/19.jpg" alt="" height="100px" width="100px" ></a> <a href=""><img src="./img/imgbg/20.jpg" alt=""height="100px" width="100px" ></a> <a href=""><img src="./img/imgbg/17.jpg" alt=""height="100px" width="100px" ></a> <a href=""><img src="./img/imgbg/18.jpg" alt=""height="100px" width="100px" ></a>
    </div>
</div>
</header>
<div class="selectionner">
    <h1 class="selec"> Jeux Enigme </h1>
        </div>
            <div class="tout">
               <div class="suivant"><a href="./personnage.php"><img  src="./img/img_log/homme.png" alt=""></a></div>
                   <div class="suivant"><a href="./personnagef.php"><img  src="./img/img_log/femme.png" alt=""></a></div>
      </div>
 <div class="next">
 <a  class="avant" onclick="boutonAvant()"><ion-icon name="accessibility-outline"></ion-icon></a>
 </div>
 <footer>
 </footer>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let toggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu');
        toggle.onclick = function(){ 
            menu.classList.toggle('active')
        }  
    </script>
  <script src="./js/menu.js"></script>
    <script src="./js/personnage.js"></script>
</html>
