<?php 
session_start();

//Limpar todas as variaveis da sessão
$_SESSION = array();

session_destroy();

//Redirecionar para a página de login
header("Location:login.php");
exit();
