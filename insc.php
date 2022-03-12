<?php
session_start();
include './include/header.php';
?>
<section class="zindexbis">

    <input type="checkbox" id="switch">
    <div class="app">
        <div class="content">
            <label for="switch">
                <div class="toggle" onclick="toggleSwitch()"></div>
                <div class="names">
                    <p class="styl" id="day">Day</p>
                    <p class="styn" id="night">Night</p>
                </div>
            </label>
        </div>
    </div>
</section>
<section class="zindex">
<form class="labin" action="./include/inscript.php" method="POST">
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" class="decou" name="pseudo" id="pseud" required
                pattern="^[A-Za-zÀ-ÿ'-]+$" max="20" placeholder="Username" required />
        </div>

        <div class="inpdec">
            <i class="far fa-envelope"></i>
            <input type="email" class="decou" name="email" id="email" required
                pattern="^[A-Za-z0-9'_.-]+@{1}[A-Za-z0-9]+.[A-Za-z]{2,}$" placeholder="Email">
        </div>

        <div id="passcon" class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" class="decop" placeholder="Password" required name="mdp"
                id="motdpe" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
                <div class="eyecon">
                    <img class="eye" src="../nainstitution/img/img_log/eye.svg" alt="">
                    <img class="eye-off" src="../nainstitution/img/img_log/eye-off.svg" alt="">
                </div>
        </div>

        <div id="passcon" class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" class="decop" placeholder="Confirm" required name="mdpconf"
                id="motdpec" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
                <div class="eyecon">
                    <img class="eye" src="../nainstitution/img/img_log/eye.svg" alt="">
                    <img class="eye-off" src="../nainstitution/img/img_log/eye-off.svg" alt="">
                </div>
        </div>

        <input type="submit" name="submit" value=">" class="logbtn" />
        <p class="box-register">Déjà inscrit? <br> <a class="dec" href="./login.php">Connectez-vous ici</a></p>

    </form>
</section>
<section class="errmess">
    
    <?php
        if(isset($_GET['reg_err'])){
            $e = $_GET['reg_err'];
           if($e == 1){
               echo 'Email already exist or Username already exist';
           }
           elseif($e == 2){
            echo 'BAD Model pass';
           }
        }
    ?>
</section>

<script>
    feather.replace();
</script>
<?php
include './include/footer.php';
?>
