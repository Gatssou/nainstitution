<?php
session_start();
require './include/functions.php';
require_once '../nainstitution/include/bdd.php';
logged_only();
$id_session = session_id();
$usename = $_SESSION["auth"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/reliephpindex.css">
    <link rel="shortcut icon" href="../nainstitution/img/imagepersosnage/terre.gif" type="image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body>

    <header>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
        </style>
        
        <div class="head">
            <img class="lierre" src="./img/img_index/lierre2.png" alt="">
            <h1 class="popi">
                <?php
                if($usename){
                    echo '<font color="white"> Bienvenue </font>' .$usename. '<font color="white"> <br> dans cette </font>';
                }
                ?>
            </h1>
            <img class="lierre2" src="./img/img_index/lierre2.png" alt="">
        </div>


            <div class="titree">
                <p class="n">N</p>
                <p class="a">A</p>
                <p class="i">I</p>
                <p class="n">N</p>
                <p class="v">V</p>
                <p class="e">E</p>
                <p class="i">N</p>
                <p class="t">T</p>
                <p class="u">U</p>
                <p class="r">R</p>
                <p class="a">A</p>
            </div>
            <!-- blipou -->
            <button type="boutton" class="toggle"><img src="./img/index/menugif.webp" width="100px"
             height="100px" alt="" >
            </button>
            <section>
                <div class="menu">
                    <li style="--i:0;">
                        <a href="./include/articlepage/fonctionform.php"><img src="./include/articlepage/Img/mail.png"
                                height="70px" width="70px" alt=""></a>
                    </li>
                    <li style="--i:1;">
                        <a href="./index.php"><img src="./img/index/home.png" alt=""></a>
                    </li>
                    <li style="--i:2;">
                        <a href="./personnagef.php"><img src="./img/img_index/femme.png" height="80px" width="80px"
                                alt=""></a>
                    </li>
                    <li style="--i:3;">
                        <a href="./personnage.php"><img src="./img/img_index/Sans titre.png" height="100px"
                                width="110px" alt=""></a>
                    </li>
                    <li style="--i:4;">
                        <a
                            href="https://www.amazon.fr/s/?ie=UTF8&keywords=sp%C3%A9l%C3%A9o&index=aps&tag=googhydr0a8-21&ref=pd_sl_9oudaqi60e_b&adgrpid=51656120770&hvpone=&hvptwo=&hvadid=275309076390&hvpos=&hvnetw=g&hvrand=16735063151113577990&hvqmt=b&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9055869&hvtargid=kwd-298119585795&hydadcr=28262_1825247&gclid=EAIaIQobChMIpb_cwoi29gIVjtd3Ch3yhggqEAAYASAAEgI-n_D_BwE"><img
                                src="./img/img_index/kitsurvie.png" height="80px" width="80px" alt=""></a>
                    </li>
                    <li style="--i:5;">
                        <a href="./include/articlepage/envoief.php"><img src="./img/img_index/faq.png" alt=""></a>
                    </li>
                    <li style="--i:6;">
                        <a href="./include/admin/connexion.php"><img src="./img/index/enigme.png" height="80px"
                                width="80px" alt=""></a>
                    </li>
                    <li style="--i:7;">
                        <a href="./include/disconnect.php"><img src="./img/index/logout.png" height="80px" width="80px"
                                alt=""></a>
                    </li>
                </div>
            </section>
            
    </header>
    <div class="selectionner">
        <h1 class="selec"> Explorateurs du Monde </h1>
    </div>
    <div class="tout">
        <div class="suivant"><a href="./personnage.php"><img src="./img/img_log/homme.png" alt=""></a></div>
        <div class="suivant"><a href="./personnagef.php"><img src="./img/img_log/femme.png" alt=""></a></div>
    </div>
    <div class="next">
        <a class="avant" onclick="boutonAvant()">
            <ion-icon name="accessibility-outline"></ion-icon>
        </a>
    </div>
    <footer>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $('.overlay').on('click', function (e) {
            if (e.target !== this) {
                return;
            }
        });
    </script>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let toggle = document.querySelector('.toggle');
    let menu = document.querySelector('.menu');
    toggle.onclick = function () {
        menu.classList.toggle('active')
    }
</script>
<script src="./js/menu.js"></script>
<script src="./js/personnage.js"></script>

</html>