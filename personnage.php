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
    <link rel="stylesheet" href="./sass/personnages.css">
    <title>Document</title>
</head>
<body>
    <section>
        <h2></h2>
    </section>
    <div class="contien">
    <div class="menup active">
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage uno</h1>
            </div>
            
    </div>
            <div class="perso-back"> 
                <img src="./img/imagepersosnage/pikatchu.png" height="500px" alt=""> 
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
                <img src="./img/imagepersosnage/tigre.png" height="500px" alt=""> 
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
                <img src="./img/imagepersosnage/ohohoho.png" height="500px" alt=""> 
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
                <img src="./img/imagepersosnage/rouge.png" height="600px" alt=""> 
            </div>
               
    </div>

    </div>
   
    <footer>
 <a href="./include/disconnect.php">Se déconnecter</a>
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
'url("./img/imgbg/208702.jpg")',
'url("./img/imgbg/584631.jpg")',
'url("./img/imgbg/692298.jpg")',
'url("./img/imgbg/ambiance.jpg")',
'url("./img/imgbg/cimetière.png")',
'url("./img/imgbg/FF.PNG")',
'url("./img/imgbg/forêts.jpg.PNG")',
'url("./img/imgbg/lapin8.jpg")',
'url("./img/imgbg/ouff.jpg")',
'url("./img/imgbg/village.jpg")',

]
        const section = document.querySelector('section')
        const bg = images[Math.floor(Math.random() * images.length)
    ];
    section.style.backgroundImage = bg;
    }
    setInterval(changeBg, 3000)
</script>
</body>
</html>