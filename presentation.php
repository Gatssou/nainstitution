<?php
session_start();
require './include/functions.php';
logged_only();
// session_start recupere l'information si l'utilisateur est connecté si ne l'est pas  on redirige vers une funtion créé au préalable dans un dossier qui utilise la manière require qui appelle cette dite function pour rediriger méthode 1.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/index.css">
    <link rel="shortcut icon" href="./img/imagepersosnage/terre.gif" type="image">
    <link rel="stylesheet" href="./fa/css/all.css">
    <link rel="stylesheet" href="./sass/media_q.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Nain ventura</title>
</head>

<body>
  <header id="naviga" class="navi">
      <div class="drop1">
      <button id="boutone">
              Menu
          </button>
          <div class="contentee" id="bravo">
              <a href="./pub.php">Pub.php</a>
              <a href="./index.php">Index Map</a>
              <a href="../nainstitution/include/articlepage/fonctionform.php">Formulaire FAQ</a>
          </div>
          </div> 
          <a href="#"></a>
          <a class="icone" onclick="myfunction()">&#9776;</a>
     

  </header> 
    <div class="para">
        <div id="menud">
      
           
        </div>
        <h1 class="aventuriers">Aventuriers</h1>
        <section id="pic_1" class="sec">
            <div class="av1">
                <div class="ttl">Mike Horn</div>
                <div id="avs">
                    <a href="#" onclick="openPop()">
                        <div class="st av"></div>
                    </a>
                    <a href="#" onclick="openPopnd()">
                        <div class="nd av"></div>
                    </a>
                    <a href="#" onclick="openPoprd()">
                        <div class="rd av"></div>
                    </a>
                    <a href="#" onclick="openPopth()">
                        <div class="th av"></div>
                    </a>
                    <a href="#" onclick="openPopfi()">
                        <div class="fi av"></div>
                    </a>
                </div>
            </div>
            <div title="Cliquez pour fermer" class="pop">
                <a href="javascript:void(0)" class="x" onclick="closePop()"></a>
                <h1>Description</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, ea! Expedita molestias sequi cum neque?</p>
            </div>
            <div title="Cliquez pour fermer" class="popnd">
                <a href="javascript:void(0)" onclick="closePopnd()"></a>
                <h1>Hi</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, similique.</p>
            </div>
            <div title="Cliquez pour fermer" class="poprd">
                <a href="javascript:void(0)" onclick="closePoprd()"></a>
                <h1>Hi</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div title="Cliquez pour fermer" class="popth">
                <a href="javascript:void(0)" onclick="closePopth()"></a>
                <h1>Hi</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo dolor possimus sapiente aperiam voluptate impedit illo harum!</p>
            </div>
            <div title="Cliquez pour fermer" class="popfi">
                <a href="javascript:void(0)" onclick="closePopfi()"></a>
                <h1>Hi</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores modi perferendis, porro eum, vel doloribus sint accusantium illo eligendi, exercitationem voluptatem numquam!</p>
            </div>
            <!--<div class="containere">
                <a href="" id="bouddha">
                    <h1>Prénom Nom<br> Indice de survie 7.9</h1>
                    <p class="infos">Lorem, ipsum dolor.</p>
                </a>
            </div>  -->
        </section>
        <section id="pic_2" class="sec">
            <div class="av2">
                <div class="ttl2">Av2</div>
                <div id="avs2">
                    <a href="#pic_2" onclick="openPop2()">
                        <div class="st2 av"></div>
                    </a>
                    <a href="#pic_2" onclick="openPopnd2()">
                        <div class="nd2 av"></div>
                    </a>
                    <a href="#pic_2" onclick="openPoprd2()">
                        <div class="rd2 av"></div>
                    </a>
                    <a href="#pic_2" onclick="openPopth2()">
                        <div class="th2 av"></div>
                    </a>
                    <a href="#pic_2" onclick="openPopfi2()">
                        <div class="fi2 av"></div>
                    </a>
                </div>
            </div>
            <div class="pop2" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" class="x" onclick="closePop2()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popnd2" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopnd2()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="poprd2" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePoprd2()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popth2" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopth2()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popfi2" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopfi2()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <!--  
            <div class="containere">
                <a href="#" id="bouddhaa">
                    <h1>Mr Kangourou IDS de survie 9.9</h1>
                    <p class="infos">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere consequuntur totam
                        veniam sunt omnis non ratione inventore quis. Dolor dolore exercitationem odit nostrum modi
                        corporis perferendis quibusdam nemo necessitatibus Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Accusamus adipisci beatae labore laudantium. Quos quis ipsa totam rerum
                        commodi in consequatur, quaerat explicabo deleniti iste ratione delectus doloremque </p>
                </a>
            </div>
            -->
        </section>

        <!--   <section id="pic_3" class="s3">
            <h1>Aventurier 3</h1>
             <div class="containere">
                <a href="" id="bouddhaaa">
                    <h1>Mr Kangourou IDS de survie 9.9</h1>
                    <p class="infos">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere consequuntur totam
                        veniam sunt omnis non ratione inventore quis. Dolor dolore exercitationem odit nostrum modi
                        corporis perferendis quibusdam nemo necessitatibus Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Accusamus adipisci beatae labore laudantium. Quos quis ipsa totam rerum
                        commodi in consequatur, quaerat explicabo deleniti iste ratione delectus doloremque </p>
                </a>
            </div> 
        </section>-->

        <section id="pic_3" class="sec">
            <div class="av3">
                <div class="ttl3">Av3</div>
                <div id="avs3">
                    <a href="#pic_3" onclick="openPop3()">
                        <div class="st3 av"></div>
                    </a>
                    <a href="#pic_3" onclick="openPopnd3()">
                        <div class="nd3 av"></div>
                    </a>
                    <a href="#pic_3" onclick="openPoprd3()">
                        <div class="rd3 av"></div>
                    </a>
                    <a href="#pic_3" onclick="openPopth3()">
                        <div class="th3 av"></div>
                    </a>
                    <a href="#pic_3" onclick="openPopfi3()">
                        <div class="fi3 av"></div>
                    </a>
                </div>
            </div>
            <div class="pop3" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" class="x" onclick="closePop3()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popnd3" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopnd3()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="poprd3" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePoprd3()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popth3" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopth3()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popfi3" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopfi3()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
        </section>

        <section id="pic_4" class="sec">
            <div class="av4">
                <div class="ttl4">Av4</div>
                <div id="avs4">
                    <a href="#pic_4" onclick="openPop4()">
                        <div class="st4 av"></div>
                    </a>
                    <a href="#pic_4" onclick="openPopnd4()">
                        <div class="nd4 av"></div>
                    </a>
                    <a href="#pic_4" onclick="openPoprd4()">
                        <div class="rd4 av"></div>
                    </a>
                    <a href="#pic_4" onclick="openPopth4()">
                        <div class="th4 av"></div>
                    </a>
                    <a href="#pic_4" onclick="openPopfi4()">
                        <div class="fi4 av"></div>
                    </a>
                </div>
            </div>
            <div class="pop4" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" class="x" onclick="closePop4()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popnd4" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopnd4()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="poprd4" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePoprd4()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popth4" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopth4()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
            <div class="popfi4" title="Cliquez n'importe où pour fermer">
                <a href="javascript:void(0)" onclick="closePopfi4()"></a>
                <h1>Hi</h1>
                <p>test pop up</p>
            </div>
        </section>
        </div>
    </div>

</body>
<script src="./js/stock/jquery-3.6.0.min.js"></script>
<script src="./js/stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="./js/index.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/menu.js"></script>
<script>
    function myfunction(){
        let x = document.getElementById("bravo");
        if (x.className === "contentee") {
            x.className += "responsive";
        } else {
            x.className = "contentee";
        }
    }
</script>

</html>