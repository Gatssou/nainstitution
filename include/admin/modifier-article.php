<?php
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_GET['id']) AND !empty($_GET['id'])){
      $getid = $_GET['id'];
          $recupArticle = $bdd->prepare('SELECT * FROM admin WHERE id = ?');
          $recupArticle->execute(array($getid));
          if($recupArticle->rowCount() > 0){  
              $articleInfos = $recupArticle->fetch();
                $titre = $articleInfos['titre'];
                 $description =  str_replace('<br />', '', $articleInfos['description']);
                  //on recupere les balises br pour qu'ils soient null dans la base et non voyante
// htmlspecialchars évite que l'utilisateur rentre du code html .


if(isset($_POST['valider'])){   // si on clique sur la variable POST valider l'excution du code ci dessous
                  $titre_saisi = htmlspecialchars($_POST['titre']);
              //    nl2br() remplace les sauts de ligne dans les balises de texte par des br.
                  $description_saisie = nl2br(htmlspecialchars($_POST['description']));

//prepare une requête de mofication UPDATE.
                  $updateArticle = $bdd->prepare('UPDATE admin SET titre = ?, description = ? WHERE id = ? ');
                  //
                  $updateArticle->execute(array($titre_saisi, $description_saisie, $getid));

                  header('location: articles.php');
                }

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