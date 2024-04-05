<?php 
include 'nav.php'; 
include 'conexao.php';
?>

<link rel="stylesheet" href="style.css">

<form action="request_cadastro.php" method="POST" class="cadastro">
    <h1>Cadastre-se</h1>
  <div class="cadastro-card">

    <label for="name">Nome</label>
    <input type="text" id="name" name="nm_nome" style="border-radius: 7px;">

    <label for="username">Nome de ususário</label>
    <input type="text" id="username" name="username" style="border-radius: 7px;">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" style="border-radius: 7px;">

    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone" style="border-radius: 7px;">

    <label for="idade">Idade</label>
    <input type="number" id="idade" name="idade" style="border-radius: 7px;">

    <label for="password">senha</label>
    <input type="password" id="password" name="password" style="border-radius: 7px;">

    <label for="confirm_password">Confirme a senha</label>
    <input type="password" id="confirm_password" name="confirm_password" style="border-radius: 7px;">
    
    <button type="submit" class="btn btn-primary" style="border-radius: 7px; margin-top: 10px; color: corInicial;">Cadastrar</button>
  </div>
  
</form>



<?php include 'rodape.html'; ?>