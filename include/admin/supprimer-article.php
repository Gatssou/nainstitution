<?php

$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_GET['id']) AND !empty($_GET['id'])){
$getid = $_GET['id'];
   $recupArticle = $bdd->prepare('SELECT * FROM admin WHERE id = ?');
   $recupArticle->execute(array($getid));
          if($recupArticle->rowCount() >0 ){
   $deleteArticle = $bdd->prepare('DELETE FROM admin WHERE id = ?')  ;  
   $deleteArticle->execute(array($getid)) ; 
        header('location: articles.php');

          }else{
              echo " aucun article trouvé";
          }
}else{
    echo "aucun ID trouvé";
}
?>