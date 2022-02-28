<?php
include './include/header.php';
?>

<section class="zindexbis">
    <input type="checkbox" id="switch">
    <div class="app">
        <div class="content" onclick="toggleSwitch()">
            <label for="switch" class="active">
                <div class="toggle" id="toggle"></div>
                <div class="names">
                    <p class="styl" id="day">Day</p>
                    <p class="styn" id="night">Night</p>
                </div>
            </label>
        </div>
    </div>
</section>
<section class="zindex">
    <form class="labin" action="./include/log.php" method="POST">

        <div class="inpdec">
            <i class="far fa-user"></i>

            <input type="text" class="decou" placeholder="Username" name="pseudo" id="pseud"
                required pattern="^[A-Za-zÀ-ÿ0-9'-]+$">
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>

            <input type="password" class="decop" placeholder="Password" name="motdedep"
                id="motdp" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
        </div>

        <div class="passforgot">
            <!-- <a class="fgtp" href="./">Forgot Pass ?</a> -->

            <input type="submit" name="submit" value=">" class="logbtn" />
        </div>

        <p class="box-register">Vous êtes nouveau ici? <a class="dec" href="./insc.php">S'inscrire</a></p>

    </form>
</section>
<section class="errmess">
<?php
    if(isset($_GET['log_err'])){
        $e = $_GET['log_err'];
       if($e == 1){
           echo 'Bad use';
       }elseif($e == 2){
        echo 'Bad pass';
       }
       }
      
    

?>
</section>
<?php
include './include/footer.php';
?>
