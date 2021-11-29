<?php
include './include/header.php';
?>


<section class="zindexbis">
	<input type="checkbox" id="switch">
	<div class="app">
		<div class="content">
			<label for="switch">
				<div class="toggle"></div>
				<div class="names">
					<p class="styl" id="day" onclick="lightTheme()">Light</p>
					<p class="styn" id="night" onclick="darkTheme()">Dark</p>
				</div>
			</label>
		</div>
	</div>
</section>
<section class="zindex">
	<form class="labin" action="./php/log.php" method="POST">

		<div class="inpdec">
			<i class="far fa-user"></i>

			<input type="text" onclick="blurEffect()" class="decou" placeholder="Username" name="pseudo" id="pseud"
				required pattern="^[A-Za-zÀ-ÿ'-]+$">
		</div>

		<div class="inpdec">
			<i class="fas fa-lock"></i>

			<input type="password" onclick="blurEffects()" class="decop" placeholder="Password" required name="motdedep"
				id="motdp" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,24}$">
		</div>

		<div class="passforgot">
			<!-- <a class="fgtp" href="./">Forgot Pass ?</a> -->

			<input type="submit" name="submit" value=">" class="logbtn" />
		</div>

		<p class="box-register">Vous êtes nouveau ici? <a class="dec" href="./insc.php">S'inscrire</a></p>

	</form>
</section>

<?php
include './include/footer.php';
?>