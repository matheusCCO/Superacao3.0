<?php
require_once('db_connect.php');

function mostrar_avaliacao_gestor($connect, $idColaborador)
{
    $query = "SELECT resultado.JUSTIFICATIVA, resultado.NOTA_RESULTADO, resultado.ID_COLABORADOR_AVALIADO FROM resultado, avaliacao WHERE resultado.ID_COLABORADOR_AVALIADO = '$idColaborador' and avaliacao.TIPO_AVALIACAO = 'Gestor' and resultado.ID_AVALIACAO = avaliacao.ID_AVALIACAO;";
    $execute = mysqli_query($connect, $query);
    $resultado = mysqli_fetch_all($execute, MYSQLI_ASSOC);

    return $resultado;
}
