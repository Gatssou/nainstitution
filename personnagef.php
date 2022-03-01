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
    <link rel="stylesheet" href="./sass/personnagef.css">
    <title>Document</title>
</head>
<body>
    <section>
    <div class="globe"> <img src="./img/imagepersosnage/5.gif" alt="">
</div>
    </section>
  
  
    <div class="contien"> 
  
    <div class="menup ">
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage uno</h1>
            </div>
            
    </div>
            <div class="perso-back"> 
           
                <a href=""><img src="./img/imagepersosnage/jeanne.jpg" height="400px" alt=""> </a>
            </div>     
    </div>
    <div class="menup">
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage dos</h1>
            </div>
    </div>
            <div class="perso-back"> 
                <img src="./img/imagepersosnage/Annie Smith-Peck.jpg" height="400px" alt=""> 
            </div>     
    </div>
    <div class="menup">
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage tres </h1>
            </div>
    </div>
            <div class="perso-back"> 
                <img src="./img/imagepersosnage/Nellie Bly.jpg" height="400px" alt="">  
            </div>      
    </div>
    <div class="menup">
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage quatro</h1>
            </div>
    </div>
            <div class="perso-back"> 
                <img src="./img/imagepersosnage/Annie “Londonderry” Cohen Kopchovsky.jpg" height="400px" alt=""> 
                </a>
            </div>         
    </div>
    </div>
    <footer>
    <div class="retour"><a href="./pub.php"><img src="./include/admin/img/retour.png" alt=""></a></div>
 <div class="deco"><a href="./include/disconnect.php">Se déconnecter</a></div>
 </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
      $(document).on("click", ".menup", function () {
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
<script>
    function changeBg(){
const images = [
    'url("./img/imgbg/2.jpg")','url("./img/imgbg/3.jpg")','url("./img/imgbg/4.jpg")','url("./img/img_country/plage.jpg")',
]
        const section = document.querySelector('section')
        const bg = images[Math.floor(Math.random() * images.length)
    ];
    section.style.backgroundImage = bg;
    }
    setInterval(changeBg, 5000)
</script>
</body>
</html>