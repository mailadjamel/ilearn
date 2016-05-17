<?php
session_start();
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
?>
