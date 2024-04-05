<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php 
include 'nav.php'; 
include 'conexao.php';
?>


<div class="login">
    <h1>Faça login ou Cadastre-se</h1>
    <form method="POST" action="request_login.php" class="caixa">
   
    <label for="email">Email</label>
    <input type="text" id="email" name= "email"placeholder="Digite seu email" style="border-radius: 7px;">
    
    <label for="password">Senha</label>
    <input type="password" id= "password" name="password" placeholder="Digite sua senha" style="border-radius: 7px;">

    <button type="submit" class="btn btn-primary" style="border-radius: 7px;">Entrar</button>
    <a href="cadastro.php">Cadastre-se</a>

</form>
</div>


<?php include 'rodape.html'; ?>
</body>
</html>