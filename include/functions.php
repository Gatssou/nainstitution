<?php
function token($length){
    $alph = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
    $token = substr(str_shuffle(str_repeat($alph, $length)),0, $length);
    return $token;
}
function logged_only(){
    if (session_status() == PHP_SESSION_NONE){
        session_start();
        header('location:login.php');
    }
    if($_SESSION['auth']==true){ 
    
        }
    elseif($_SESSION['auth']==false) 
        echo '<pas de data>';
    
    if(!isset($_SESSION['auth'])){
        $_SESSION['flash']['danger'] = "Vous n'avez pas les droits suffisants pour accèder à cette page";
        header('location:./login.php');
        exit();
    }
}
?>
<?php
if(isset($_GET['accepte_cookie'])){
    setcookie('accepte_cookie', 'true', time() + 365*24*3600);
    header('location:./pub.php');
}
?>
<?php
// retenir l'email de la personne connectée pendant 1 an


