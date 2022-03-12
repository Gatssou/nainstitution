<?php
 session_start();
/*n'ayant pas utiliser de session start   session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
la connexion à la page par bié du http: ... hors inscription ou deconnxion du site, redigera sur l'echo aucun id trouvé
 */
/* connexion à la base blipou , table admin on récupere l'article par le titre et la description  ID 1.2.3.4...etc envoyé par l'admin du site pour verification ou modification ou suppression  */
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_GET['id']) AND !empty($_GET['id'])){
$getid = $_GET['id'];
   $recupArticles = $bdd->prepare('SELECT * FROM recup WHERE id = ?');
   $recupArticles->execute(array($getid));
          if($recupArticles->rowCount() >0 ){
   $deleteArticle = $bdd->prepare('DELETE FROM recup WHERE id = ?');  
   $deleteArticle->execute(array($getid)); 
        header('location: recupenvoie.php');

          }else{
              echo " aucun article trouvé";
          }
}else{
    echo "aucun ID trouvé";
}
?>
