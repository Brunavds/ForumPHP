<?php

include 'conexao.php';

$autor = mysqli_real_escape_string($con,$_POST['autor']);
$texto = mysqli_real_escape_string($con, $_POST['texto']);
$data_publicacao = date('Y-m-d H:i:s');

$sql = "INSERT INTO comentarios (autor, texto, data_publicacao) VALUES ('$autor', '$texto', '$data_publicacao')";

if(mysqli_query($con, $sql)){
    echo "Comentário publicado";

}else{
    echo "Erro ao publicar o comentário" . mysqli_error($con);
}

header("Location:foruns.php");
exit;