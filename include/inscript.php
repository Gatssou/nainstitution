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
require_once './functions.php';
try
{
 
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 
// vérification si le champ pseudo a bien été rempli
if (isset($_POST['username']))
{
 
// Alors dans ce cas on met saisie du $_POST['pseudo'] dans la variable $pseudo
    $usname = htmlentities($_POST['username]);
     
   
    $sql = $bdd->prepare('SELECT username FROM logtest WHERE PSEUDO = \''.$pseudo.'\' AND \''.$mail.'\';');
    $sql->execute(array('.$pseudo.' => $_POST['pseudo'], '.$mail.' => $_POST['mail']));
  
    // recherche de résultat
    $res = $sql->fetch();
  
    if ($res)
    {
        // S'il y a un résultat, c'est à dire qu'il existe déjà un pseudo, alors "Ce pseudo est déjà utilisé"
        echo "Ce pseudo ou ce mail est déjà utilisé !";
    }
    // Sinon le résultat est nul ce qui veut donc dire qu'il ne contient aucun pseudo, donc on insère <img src="../../bundles/tinymce/vendor/tiny_mce/plugins/emotions/img/smile.png" title=":)" alt=":)">
    else
    {
    echo "Ce pseudo n'a jamais été utilisé";
 
  
 
    }

?>