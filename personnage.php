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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
      $(document).on("click", ".menup", function () {
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
</body>
</html>