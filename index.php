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

    <div class="para">

        <div id="all" class="section-stick">
            <div class="stick active"></div>
        </div>

        <nav class="nav">
            <p class="poney"><a href="./pub.php">Pub</a></p>
            <p class="poney">Tanzanie</p>
            <p class="poney">Fidji</p>
            <p class="poney">Laos</p>
        </nav>

        <section id="pic_1" class="s1">
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
                </div>
            </div>

            <div class="pop">
                <a href="javascript:void(0)" class="x" onclick="closePop()"></a>
                <h1>Description</h1>
                <p title="Cliquez n'importe où pour fermer">Né le 16 juillet 1966 à Johannesbourg.</p>
            </div>
            <!-- 
            <div class="popmq">
                <h1>Hi</h1>
                <p>Lorem, ipsum dolor.</p>
            </div>
 -->
            <div class="popnd">
                <a href="javascript:void(0)" onclick="closePopnd()"></a>
                <h1>Hi</h1>
                <p title="Cliquez n'importe où pour fermer">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dignissimos officia sapiente non expedita molestias hic numquam aliquid aut debitis culpa.</p>
            </div>

            <div class="poprd">
                <a href="javascript:void(0)" onclick="closePoprd()"></a>
                <h1>Hi</h1>
                <p title="Cliquez n'importe où pour fermer">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iste aut aspernatur odio repellat. Error, dolor!</p>
            </div>

            <div title="Cliquez n'importe où pour fermer" class="popth">
                <a href="javascript:void(0)" onclick="closePopth()"></a>
                <h1>Hi</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eveniet laborum, ab voluptatum
                    ratione molestiae atque facere at accusamus. Dolor unde totam neque eius rem delectus dolores
                    aliquid. Laborum similique culpa aperiam aliquid vero tenetur consequatur ad hic doloribus
                    quibusdam.</p>
            </div>

            <div class="containere">
                <a href="" id="bouddha">
                    <h1>Prénom Nom<br> Indice de survie 7.9</h1>
                    <p class="infos">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere consequuntur totam
                        veniam sunt omnis non ratione inventore quis. Dolor dolore exercitationem odit nostrum modi
                        corporis perferendis quibusdam nemo necessitatibus Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Accusamus adipisci beatae labore laudantium. Quos quis ipsa totam rerum
                        commodi in consequatur, quaerat explicabo deleniti iste ratione delectus doloremque </p>
                </a>
            </div>
        </section>

        <section id="pic_2" class="s2">
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

        <section id="pic_3" class="s3">
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
        </section>

        <section id="pic_4" class="s4">
            <h1>Aventurier 4</h1>
            <div class="containere">
                <a href="" id="bouddhaaaa">
                    <h1>Mr Kangourou IDS de survie 9.9</h1>
                    <p class="infos">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere consequuntur totam
                        veniam sunt omnis non ratione inventore quis. Dolor dolore exercitationem odit nostrum modi
                        corporis perferendis quibusdam nemo necessitatibus Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Accusamus adipisci beatae labore laudantium. Quos quis ipsa totam rerum
                        commodi in consequatur, quaerat explicabo deleniti iste ratione delectus doloremque </p>
                </a>
            </div>
        </section>
    </div>

</body>
<script src="./js/stock/jquery-3.6.0.min.js"></script>
<script src="./js/stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="./js/index.js"></script>

</html>