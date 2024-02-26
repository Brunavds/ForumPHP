<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php 
include 'nav.php'; 
include 'conexao.php';
?>
    
<h1>Faça login ou Cadastre-se</h1>
<form method="POST" action="request_login.php">
    <label for="email">Email</label>
    <input type="text" id="email" name= "email"placeholder="Digite seu email">
    <label for="password">Senha</label>
    <input type="password" id= "password" name="password" placeholder="Digite sua senha">

    <button type="submit" class="btn btn-primary">Entrar</button>
    <a href="cadastro.php">Cadastre-se</a>

</form>


<?php include 'rodape.html'; ?>
</body>
</html>