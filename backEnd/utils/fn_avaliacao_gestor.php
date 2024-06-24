<?php
require_once('db_connect.php');

function avaliacao_gestor($connect,  $id_colaborador_avaliado, $id_colaborador_avaliador)
{

    $nota = $_POST['nota'];
    $avaliacao = mysqli_real_escape_string($connect, $_POST['avaliacao']);
    $query = "INSERT INTO avaliacao (ID_COLABORADOR_AVALIADO, ID_COLABORADOR_AVALIADOR,NOTA, STATUS, TIPO_Avaliacao) VALUES ( ' $id_colaborador_avaliado','$id_colaborador_avaliador','$nota', 2, 'Gestor')";
    $execute = mysqli_query($connect, $query);
    if ($execute) {
        $query = "SELECT avaliacao.ID_AVALIACAO FROM avaliacao WHERE avaliacao.TIPO_AVALIACAO = 'Gestor' and avaliacao.ID_COLABORADOR_AVALIADO = '$id_colaborador_avaliado' and avaliacao.ID_COLABORADOR_AVALIADOR = $id_colaborador_avaliador";
        $execute = mysqli_query($connect, $query);
        $results = mysqli_fetch_array($execute, MYSQLI_ASSOC);
        $idAvaliacao = $results['ID_AVALIACAO'];

        $query = "INSERT INTO resultado (ID_COLABORADOR_AVALIADO, ID_COLABORADOR_AVALIADOR, JUSTIFICATIVA, NOTA_RESULTADO, ID_AVALIACAO) VALUES (' $id_colaborador_avaliado','$id_colaborador_avaliador', '$avaliacao', '$nota', $idAvaliacao)";
        $execute = mysqli_query($connect, $query);

        echo "<div class= 'retornoSucceso'><h3 class='msg'>Avaliação realizada com sucesso.</h3></div>";
    } else {
        echo "<div class= 'retornoErro'><h3 class='msg'>Erro ao realizar a avaliação.</h3></div>";
    }
}
