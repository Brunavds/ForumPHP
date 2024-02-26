<?php 
include 'nav.php'; 
include 'conexao.php';
?>

<form action="request_cadastro.php" method="POST">
    <h1>Cadastre-se</h1>
  <div>
    <label for="name">Nome</label>
    <input type="text" id="name" name="nm_nome">
    <label for="username">Nome de ususário</label>
    <input type="text" id="username" name="username">
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone">
    <label for="idade">Idade</label>
    <input type="number" id="idade" name="idade">
    <label for="password">senha</label>
    <input type="password" id="password" name="password">
    <label for="confirm_password">Confirme a senha</label>
    <input type="password" id="confirm_password" name="confirm_password">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>



<?php include 'rodape.html'; ?>