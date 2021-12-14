<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass/perspec.css">
    <title>Document</title>
</head>

<body id="scrollbody">
    
<section>
  <article class="draw">
    <div class="disp">
        <h2>Line test js</h2>
        <p>test</p>
        <?php
          if (isset($_POST['username'])) {
            echo "Bonjour ".$_POST['username']." (deconnexion)";
          }
        ?>
    
    
            <div id="line"></div>
            <canvas id="canva" class="canva" width="1260px" height="2000px"></canvas>
           <!-- <h1 id="s" class="s">Sloubi</h1>
             <canvas id="canvaa" class="canvaa" width="1260px" height="1000px"></canvas> -->
      </div>
  </article>

  <article class="title">
    <h3 id="w" class="w">Merveilleux</h3>
    <h3 id="a" class="a">Amazing site</h3>
    <h3 id="t" class="t">ReTest</h3>
  </article>

  <article class="lebouton">
    <button> <a href="./index.php">Visiter</a></button>
  </article>
  
</section>


  




<!--
<section>
  <h1>Tartiflette</h1>
  <canvas id="canva2" class="canva2" width="1260px" height="1000px"></canvas>
</section>   -->
  
  <!-- 
  <div class="wrapper">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.6 107.6" id="star-svg">
	<path fill="none" stroke="black" stroke-width="2" id="star-path" d="M43.7,65.8L19.9,83.3c-2.9,1.9-5.1,3.2-7.9,3.2c-5.7,0-10.5-5.1-10.5-10.8
		c0-4.8,3.8-8.2,7.3-9.8l27.9-12L8.8,41.4c-3.8-1.6-7.3-5.1-7.3-9.8c0-5.7,5.1-10.5,10.8-10.5c2.9,0,4.8,1,7.6,3.2l23.8,17.4
		l-3.2-28.2c-1-6.7,3.5-12,9.8-12c6.3,0,10.8,5.1,9.8,11.7L57,41.8l23.8-17.4c2.9-2.2,5.1-3.2,7.9-3.2c5.7,0,10.5,4.8,10.5,10.5
		c0,5.1-3.5,8.2-7.3,9.8L63.9,53.8l27.9,12c3.8,1.6,7.3,5.1,7.3,10.1c0,5.7-5.1,10.5-10.8,10.5c-2.5,0-4.8-1.3-7.6-3.2L57,65.8
		l3.2,28.2c1,6.7-3.5,12-9.8,12c-6.3,0-10.8-5.1-9.8-11.7L43.7,65.8z"/>
</svg>

    </g>
  </svg>  
</div>-->











</body>
<script src="../js/stock/jquery-3.6.0.min.js"></script>
<script src="../js/stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery.drawsvg.js"></script>
<script src="../js/perspec.js"></script>
</html>













