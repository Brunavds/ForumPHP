<?php 
$servername = 'localhost';
$user ='root';
$password = '';
$dbname = 'forum';

//Criar Conexão 
$con = mysqli_connect($servername, $user, $password, $dbname);

// Verificar a Conexão com o banco
if(!$con){
    die('Conexão falhou: ' . mysqli_connect_error());
}
return $con;