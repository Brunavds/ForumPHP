<?php

include 'conexao.php';

$nm_nome = $_POST['nm_nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


if($confirm_password != $password){
    echo " As senhas não confere.";
    exit;
}

//Criptografar senha 
$hashed_password = password_hash($password, PASSWORD_BCRYPT);


$sql = "INSERT INTO usuarios (nm_nome, username, email, telefone, idade, password)
VALUES ('$nm_nome', '$username', '$email', '$telefone', '$idade', '$hashed_password')";

if(mysqli_query($con, $sql)){
    echo "Registro inserido com sucesso";

    header("Location:index.php");
    exit;
} else {
    echo "Erro ao inserir registro: ". mysqli_error($con);
} 




