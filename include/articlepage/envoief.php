<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
    $recupForm = $bdd->query('SELECT * FROM recup');
    while($articlee = $recupForm->fetch()){
        ?>
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="/sass/index.scss">
           <title>Document</title>
       </head>
       <body>
           
       </body>
       </html>

        <div class="articlee" style="border: 1px solid orange;">
            <h1><?= $articlee['recupmail'];?></h1>
            <p><?= $articlee['descript'];?></p>
         
         
        </div>
        <br>
        <?php
    }
?>