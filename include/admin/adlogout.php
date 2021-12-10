<?php
session_start();
$_SESSION = array();
header('location: connexion.php');
?>