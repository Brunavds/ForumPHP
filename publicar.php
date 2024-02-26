<?php 

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$texto = $_POST['texto'];
$data_publicacao = $_POST['data_publicacao'];

$topics = array(
    'titulo' => $titulo,
    'autor' => $autor,
    'texto' =>$texto,
    'data_publicacao' =>$data_publicacao,

    'comentários'=> array()

); 

function FormatarHora($data_publicacao){
    return date('D/M/Y H:I' , strtotime($data_publicacao));
}
