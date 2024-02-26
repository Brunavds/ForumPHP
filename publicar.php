<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/components/navbar/#nav">
    <title>Fórum</title>
</head>
<body>
    
<?php 
include 'nav.php'; 
include 'conexao.php';
?> 

<p></p>
<p></p>

<form action= "request_publicar.php" method="POST">
    <h2>"Solte essa criatividade, publique seu texto e vamos iniciar um novo debate! <br> Prepare-se para mergulhar no oceano de ideias e causar uma onda de discussões incríveis! 💬🚀" </h2>
    <div>
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title" placeholder="Titulo do forum">
        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor">
        <label for="text">Texto</label>
        <textarea name="" id="text" cols="30" rows="10"></textarea>
        <label for="data_publicacao">Data de Publicação</label>
        <input type="text" id="data_publicacao" name="data_publicacao" placeholder="YYYY-MM-DD HH:MM:SS">

        <button type="submit">Publicar</button>

    </div>
</form>

<h2>Comentários sobre o tema</h2>

<div>
    <label for="autor">Autor</label>
    <input type="text" id="autor" name="autor">
    <label for="text">Texto</label>
    <input type="text" id="text" name="text" placeholder="Qual a sua opinião sobre o tema? ">

    <button type="submit">Comentar</button>
</div>

<?php include 'rodape.html'; ?>

</body>
</html>