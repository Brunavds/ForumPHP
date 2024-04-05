<?php 

include 'nav.php';
include 'conexao.php';



function verForum ($idForum){
    global $con;


    //Consulta SQL para obeter informações do forum com o id informado
    $sql = "SELECT id, titulo, autor, texto FROM foruns WHERE id = $idForum";
    $result = mysqli_query($con, $sql);

    if($result){

        if(mysqli_num_rows($result) > 0){
            $forum = mysqli_fetch_assoc($result);

            echo '<h2>' . $forum['titulo'] . '</h2>';
            echo '<p>Autor: ' . $forum['autor'] . '</p>';
            echo '<p>' . $forum['texto'] . '</p>';

        } else {
            echo '<p>Fórum não encontrado. </p>';
        }
    }else {
        echo '<p> Erro na Consulta: ' . mysqli_error($con) . '</p>';
    }
}

// Exemplo de uso, onde $idForum é o ID do fórum selecionado
$idForum = 1; // Substitua pelo ID do fórum desejado
verForum($idForum); 

?>


<h2>Comentários sobre o tema</h2>

<form action="request_comentarios.php" method="POST">
<div>
    <label for="autor">Autor</label>
    <input type="text" id="autor" name="autor">
    <label for="texto">Texto</label>
    <input type="texto" id="texto" name="texto" placeholder="Qual a sua opinião sobre o tema? ">

    <button type="submit">Comentar</button>
</div>
</form>








<?php include 'rodape.html'; ?>