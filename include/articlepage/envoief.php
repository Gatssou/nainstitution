<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
    $recupForm = $bdd->query('SELECT * FROM recup');
    $usename = $_SESSION["auth"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Img/terre.gif" type="image">
    <link rel="stylesheet" href="../admin/css/naruto.css">
    <title>Nain ventura</title>
</head>

<body >
    <?php    
       while($articlee = $recupForm->fetch()):
        ?>

    <div class="articlee">

        <div class="article">
          
            <img src="../admin/img/pikapika.png" height="100px" width="100px" alt="">
            <h1><?= $articlee['recupmail'];?></h1>
            <p><?= $articlee['descript'];?></p>
        </div>
        <br>
    </div>
   
    <hr>
    <?php
        endwhile; 
        ?>
    <br>

</body>

</html>