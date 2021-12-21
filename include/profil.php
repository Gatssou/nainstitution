<?php
$bdd = new PDO('mysql:host=localhost;dbname=blipou;','root');
if(isset($_GET['id']) AND $_GET['id'] > 0 )
{
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM logtest WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo= $requser->fetch();
}
?>