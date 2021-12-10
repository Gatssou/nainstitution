<?php
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_GET['id']) AND !empty($_GET['id'])){
      $getid = $_GET['id'];
          $recupArticle = $bdd->prepare('SELECT * FROM admin WHERE id = ?');
          $recupArticle->execute(array($getid));
          if($recupArticle->rowCount() > 0){  
              $articleInfos = $recupArticle->fetch();
                $titre = $articleInfos['titre'];
                 $description = $articleInfos('description');
}else
{
    echo "Aucun article trouvé";
}
}else{
    echo " Aucun ID trouvé";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'article</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="titre" value="<?= $titre; ?>" >

    <br>
    <textarea name="description"  >
    <?= $description; ?>
    </textarea>
    <br><br>
    <input type="submit" name="valider">

    </form>
</body>
</html>