<?php 

include 'nav.php';
include 'conexao.php';


// Apresentar na tela todos os foruns postados por titulo de publicação que ao clicar irá para o forum selecionado
function mostrarForuns (){
    global $con; 

    //Consulta SQL para obter todos os fóruns ordenados por titulo
    $sql = "SELECT id, titulo FROM foruns ORDER BY titulo";
    $result = mysqli_query($con, $sql);

    if($result){
        //Verifica se há registros retornados
        if(mysqli_num_rows($result) > 0){
            echo '<h2>Fóruns Disponíveis</h2>';
            echo '<ul>';

            //Loop através dos resultados e exibe cada fórum
            while($row = mysqli_fetch_assoc($result)){
                echo '<li><a href="ver_forum.php?id=' . $row['id'] . '">' . $row['titulo'] . '</a></li>';
            }

            echo '</ul>';
        } else{ 
            echo '<p>Nenhum fórum disponível no momento. </p>';
        }
    } else {
        echo '<p> Erro na consulta: ' . mysqli_error($con) . '</p>';
    }

}

mostrarForuns();
