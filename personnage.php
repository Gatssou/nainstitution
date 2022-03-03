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
    <div id="globe"> <img src="./img/imagepersosnage/terretrois.gif" alt="">
</div>


    </section>
    
    <div class="contien"> 
    <div class="menup ">
    <div class="maintexte">
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ipsam fuga natus velit asperiores optio! Sequi alias, libero id quos sint asperiores perferendis. Pariatur error sapiente consectetur distinctio similique eveniet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, magnam excepturi quis repellat, labore quo consequuntur atque maxime facere animi ab aliquam porro et reiciendis dolorum aperiam corrupti ad?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum ipsum porro aperiam architecto, suscipit animi cupiditate nulla ipsam eligendi illo recusandae. Harum consequuntur minima cumque, corporis debitis est unde non.
    </div>
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage uno</h1>
            </div>     
    </div>
            <div class="perso-back"> 
                <a href=""><img src="../nainstitution/img/imagepersosnage/jacquecartier.jpg" height="400px" alt=""> </a>
            </div>     
    </div>
    <div class="menup">
    <div class="maintexte">
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ipsam fuga natus velit asperiores optio! Sequi alias, libero id quos sint asperiores perferendis. Pariatur error sapiente consectetur distinctio similique eveniet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, magnam excepturi quis repellat, labore quo consequuntur atque maxime facere animi ab aliquam porro et reiciendis dolorum aperiam corrupti ad?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum ipsum porro aperiam architecto, suscipit animi cupiditate nulla ipsam eligendi illo recusandae. Harum consequuntur minima cumque, corporis debitis est unde non.boumboumboumboumlboulm
    </div>
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage dos</h1>
            </div>
    </div>
            <div class="perso-back"> 
                <img src="./img/imagepersosnage/christophe.jpg" height="400px"   alt=""> 
            </div>     
    </div>
    <div class="menup">
    <div class="maintexte">
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ipsam fuga natus velit asperiores optio! Sequi alias, libero id quos sint asperiores perferendis. Pariatur error sapiente consectetur distinctio similique eveniet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, magnam excepturi quis repellat, labore quo consequuntur atque maxime facere animi ab aliquam porro et reiciendis dolorum aperiam corrupti ad?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum ipsum porro aperiam architecto, suscipit animi cupiditate nulla ipsam eligendi illo recusandae. Harum consequuntur minima cumque, corporis debitis est unde non.lklklklklklklklklk
    </div>
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage tres </h1>
            </div>
    </div>
            <div class="perso-back"> 
                <img src="./img/imagepersosnage/jamescook.jpg" height="400px" alt="">  
            </div>      
    </div>
    <div class="menup">
    <div class="maintexte">
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ipsam fuga natus velit asperiores optio! Sequi alias, libero id quos sint asperiores perferendis. Pariatur error sapiente consectetur distinctio similique eveniet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, magnam excepturi quis repellat, labore quo consequuntur atque maxime facere animi ab aliquam porro et reiciendis dolorum aperiam corrupti ad?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum ipsum porro aperiam architecto, suscipit animi cupiditate nulla ipsam eligendi illo recusandae. Harum consequuntur minima cumque.
    </div>
        <div class="persos"> 
            <div class="left">
            </div>
            <div class="right">
                <h1>Personnage quatro</h1>
            </div>
    </div>
            <div class="perso-back"> 
                
                <img src="./img/imagepersosnage/Magellan.jpg" height="400px" alt=""> 
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
    'url("./img/imagepersosnage/etoile.jpg")','url("./img/imagepersosnage/595000.jpg")','url("./img/imagepersosnage/voixlacte.jpg")','url("./img/imagepersosnage/274697.jpg")',
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