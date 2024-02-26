<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Processar o formulário de login

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Verificar as credenciais 
    if($username === 'username' && $password === 'password'){
        //Autenticação bem sucedida
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
        
    }
}