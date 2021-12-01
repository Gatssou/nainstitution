<?php
   session_start();
   if(!isset($_SESSION['user']))
   ?>
       <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./fa/css/all.css">
	<link rel="stylesheet" href="./sass/login.css">
	<title>Document</title>
</head>
  <body id="bili">
<section class="zindexbis">


<input type="checkbox" id="switch">
	<div class="app">
	    <div class="content">
	      <label  for="switch">
	        <div class="toggle"></div>
	        <div class="names">
				<p class="styl" id="day" onclick="lightTheme()">Light</p>
				<p class="styn" id="night" onclick="darkTheme()">Dark</p>
	        </div>
	      </label>
	    </div>
	</div>
</section>
<div id="root"></div>
<div class="hoo"><span class="timer"></span></div>
         <section class="zindex">
	
	
</section>
<article class="errmess">
		<?php if (!empty($message)) { ?>
			<div class="cross">
				<h1 class="err" style="background: blue;">Err 404<i class="fas fa-times first"></i></h1>
		
				<p class="errorMessage"><i class="fas fa-times redfa"></i><?php echo $message; ?></p>
				<input type="submit" name="submit" value="Noob !" class="noob">
			</div>
		<?php } ?>
		<?php if (!empty($image)) { ?>
			<img class="logerror" src="../img/img_log/203905.webp" alt="">
		<?php } ?>
	</article>
<?php
         if(isset($_GET['reg_err'])){
            $err = htmlspecialchars($_GET['reg_err']);
         
            switch($err){
               case 'success':
                ?>
      <div class="alert_danger">
         <br><strong>Succès</strong>inscription réussie !
      </div>
      <?php
         break;
         
         case 'already':
            ?>
      <div class="alert_danger">
         <br><strong>Erreur</strong> : email/mot de passe/pseudo deja utilisé
      </div>
      <?php
         break;
         }
         }
         ?>
</body>
<script src="../js/js stock/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../js/login.js"></script>
<script src="./index.js"></script>



</html>