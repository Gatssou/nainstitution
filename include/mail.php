<?php

if(mail($destinataire, $objet, $message, $headers)){
    echo '<script language="javascript">alert("Votre message à bien été envoyé");</script>';
}
else{
    echo '<script language="javascript">alert("Votre message n\'a pas été envoyé");</script>';
}
header('location:');
?>