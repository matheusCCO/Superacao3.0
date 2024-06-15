<?php require_once('db_connect.php');
function addObjetivos($connect, $id_colaborador)
{
    if (isset($_GET['adicionar'])) {
        $limiteDeObjetivos = quantidadeDeObjetivos($connect, $id_colaborador);
        if ($limiteDeObjetivos >= 5) {
            echo "<h3 class='retornoAlerta'>Maxino de objetivos atingidos .</h3>";
        } else {
            $nomeOjetivo = mysqli_real_escape_string($connect, $_GET['objetivo']);
            $decricaoOjetivo = mysqli_real_escape_string($connect, $_GET['descricao']);
            $peso = $_GET['peso'];
            $query = "INSERT objetivo (DESCRICAO_OBJETIVO, ID_COLABORADOR, NOME_OBJETIVO, PESO) VALUES ('$decricaoOjetivo', '$id_colaborador', '$nomeOjetivo', '$peso')";
            $execute = mysqli_query($connect, $query);
            if ($execute) {
                echo "<div class= 'retornoSucceso'><h3 class='msg'>Objetivo adicionado com sucesso.</h3></div>";
                //header("location: ../../frontEnd/pages/telaEscolerAvaliadores360.php");
            } else {
                echo "<h3 class='retornoErro'>Erro ao adicionar.</h3>";
            }
        }
    }
}
?>