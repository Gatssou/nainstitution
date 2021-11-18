<?php
require '../stock/header.php';
?>
 
<section>
    <div class="animation-wrapper">
      <div class="particle particle-1"></div>
      <div class="particle particle-2"></div>
      <div class="particle particle-3"></div>
      <div class="particle particle-4"></div>
    </div>
</section>
    
<section class="zindex">
    <img src="" alt="">
    <form class="labin" method="POST" action="./logtx.php">
        <img src="../logpic/team.png" class="piclog" alt="">
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" size="20px" name="user" class="decou" placeholder="Username" required>
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" class="decop" placeholder="Password" required>
        </div>

        <a href="#" class="forgotpass">Forgot password ?</a>
        <input type="submit" class="logbtn" name="login" value="Login">
                    
        <p class="log_reg">Dont' have an account ? <a href="./register.php">Register here !</a></p>
    </form>
        
</section>

<?php
require '../stock/footer.php';
?>