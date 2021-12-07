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
        <h2></h2>
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
                <img src="./img/imagepersosnage/ohohoho.png" height="500px" alt=""> 
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
                <img src="./img/imagepersosnage/femmeb.png" height="500px" alt=""> 
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
                <img src="./img/imagepersosnage/femmeb1.png" height="500px" alt=""> 
                
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
                <img src="./img/imagepersosnage/femmecc.png" height="600px" alt=""> 
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
    'url("./img/imgbg/208702.jpg")','url("./img/imgbg/1.jpg")','url("./img/imgbg/2.jpg")','url("./img/imgbg/3.jpg")','url("./img/imgbg/4.jpg")','url("./img/imgbg/5.jpg")','url("./img/imgbg/6.jpg")','url("./img/imgbg/7.jpg")','url("./img/imgbg/8.png")','url("./img/imgbg/9.jpg")','url("./img/imgbg/10.jpg")','url("./img/imgbg/11.png")','url("./img/imgbg/12.jpg")','url("./img/imgbg/13.jpg")','url("./img/imgbg/14.jpg")','url("./img/imgbg/15.jpg")','url("./img/imgbg/16.jpg")','url("./img/imgbg/17.jpg")','url("./img/imgbg/18.jpg")','url("./img/imgbg/19.jpg")','url("./img/imgbg/20.jpg")','url("./img/imgbg/21.jpg")','url("./img/imgbg/22.jpg")','url("./img/imgbg/23.jpg")','url("./img/imgbg/24.jpg")','url("./img/imgbg/25.jpg")','url("./img/imgbg/26.jpg")','url("./img/imgbg/27.jpg")','url("./img/imgbg/28.jpg")','url("./img/imgbg/29.jpg")','url("./img/imgbg/30.jpg")','url("./img/imgbg/31.jpg")','url("./img/imgbg/32.jpg")','url("./img/imgbg/33.jpg")','url("./img/imgbg/34.png")','url("./img/imgbg/35.jpg")','url("./img/imgbg/36.jpg")','url("./img/imgbg/37.png")','url("./img/imgbg/38.jpg")','url("./img/imgbg/39.jpg")','url("./img/imgbg/40.jpg")','url("./img/imgbg/208702.jpg")','url("./img/imgbg/208702.jpg")','url("./img/imgbg/208702.jpg")','url("./img/imgbg/208702.jpg")','url("./img/imgbg/208702.jpg")',

    'url("./img/imgbg/c.jpg")','url("./img/imgbg/d.jpg")','url("./img/imgbg/e.jpg")','url("./img/imgbg/f.jpg")','url("./img/imgbg/h.jpg")','url("./img/imgbg/j.jpg")','url("./img/imgbg/k.jpg")','url("./img/imgbg/l.jpg")','url("./img/imgbg/m.jpg")','url("./img/imgbg/n.jpg")','url("./img/imgbg/o.jpg")','url("./img/imgbg/r.jpg")','url("./img/imgbg/t.jpg")','url("./img/imgbg/v.jpg")','url("./img/imgbg/w.jpg")','url("./img/imgbg/y.jpg")','url("./img/imgbg/z.jpg")',

    'url("./img/imgbg/584631.jpg")','url("./img/imgbg/692298.jpg")','url("./img/imgbg/ambiance.jpg")','url("./img/imgbg/cimetière.png")','url("./img/imgbg/forêts.jpg")','url("./img/imgbg/lapin8.jpg")','url("./img/imgbg/neige.png")','url("./img/imgbg/ouff.jpg")','url("./img/imgbg/village.jpg")',

    'url("./img/imgbg/20211124_114046.jpg")','url("./img/imgbg/20211206_151745.jpg")','url("./img/imgbg/20211206_151747.jpg")','url("./img/imgbg/20211206_151759.jpg")','url("./img/imgbg/20211206_151802.jpg")', 'url("./img/imagepersosnage/wallpaper_middle_earth_shadow_of_war_06_1920x1080.jpg")',


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