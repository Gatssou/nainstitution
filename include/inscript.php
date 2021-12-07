<?php
require './functions.php';

if(!empty($_POST["pseudo"]) && !empty($_POST["email"])){
function cleandata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$usname = cleandata($_POST['pseudo']);
$mail = cleandata($_POST['email']);

}else{
    //header("location:../insc.php");
    echo "données";
}

if(!empty($_POST['pseudo']) && !empty($_POST['email'])){
    try{
        require './bdd.php';
        $check = $pdo->query("SELECT username, email FROM logtest ");
        $data = $check->fetch(PDO::FETCH_OBJ);      
    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        if($_POST['pseudo'] == $data->username || $_POST['email'] == $data->email){
            header('location:../insc.php?reg_err=2');
        }
    }
   
}else{
    echo 'Remplir les champs';
}
  // ICI verification email pseudo deja utilisé
 

if(!empty($_POST['mdp']) && !empty($_POST['mdpconf']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdp']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdpconf']) && $_POST['mdp'] === $_POST['mdpconf'])

{
$pass = $_POST["mdp"];
$hashed = password_hash($pass, PASSWORD_BCRYPT);
}
else{
    header('location:../insc.php?reg_err=1');
}
if(!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare("INSERT INTO logtest(username, password, email, conftoken) VALUES(:username, :password, :email, :conftoken)");
        $tok = token(60);
        $req->bindParam(':username', $usname);
        $req->bindParam(':password', $hashed);
        $req->bindParam(':email', $mail);
        $req->bindParam(':conftoken', $tok);
        $req->execute();

    }catch(PDOException $e){
        echo "Erreur : " . $e;

    }finally{
        $usid = $pdo->lastInsertId();
        $pdo = null;
        echo "Jean Bulbe";
        header("location:./confirm.php?id=" .$usid . "&token=" . $tok);
        
      //  header("location:./confirm.php");

    }
}else{
       // header("location:../login.php?reg_succes=password");
    } 


?>

<?php
require './functions.php';
(!empty($_POST["pseudo"]) && !empty($_POST["email"])){  
$stmt = $pdo->prepare("SELECT * FROM logtest WHERE email=?");
$stmt->execute([$email]); 
$user = $stmt->fetch();
if ($user = $pdo) {
    echo 'email existe';
} else {
    header('location:../insc.php?reg_err=3');
} 
}
finally{
  
    $pdo = null;
 
 

}
?>
