<?php
include './include/header.php';
?>



<section class="zindexbis">

    <input type="checkbox" id="switch">
    <div class="app">
        <div class="content">
            <label for="switch">
                <div class="toggle" onclick="toggleSwitch()"></div>
                <div class="names">
                    <p class="styl" id="day">Light</p>
                    <p class="styn" id="night">Dark</p>
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
                pattern="^[A-Za-zÀ-ÿ'-]+$" max="20" placeholder="Pseudo" required />
        </div>

        <div class="inpdec">
            <i class="far fa-envelope"></i>
            <input type="email" class="decou" name="email" id="email" required
                pattern="^[A-Za-z0-9'_.-]+@{1}[A-Za-z0-9]+.[A-Za-z]{2,}$" placeholder="Email">
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" class="decop" placeholder="Password" required name="mdp"
                id="motdpe" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" class="decop" placeholder="Password" required name="mdpconf"
                id="motdpec" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
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
               echo 'Mauvais mot de passe';
           }elseif($e == 2){
            echo 'Bad use';
           }
           elseif($e == 3){
            echo 'un de vos ID or MDP est déjà utilisé';
        }
        }
    ?>
</section>

<?php
include './include/footer.php';
?>
