<?php
         require 'bdd.php';
         $req = $pdo->query('SELECT user AS u, password AS p, email AS e,id AS i, compte_verifie AS cv FROM utilisateurs');
         while ($data = $req->fetch()):
            ?>

            <div>
<h3><?= ($data->id)?></h3>
            </div>

<?php endwhile;?>