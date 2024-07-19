<?php require_once('db_connect.php');
function mostrarAvaliados($connect, $id_colaborador)
{
    $query = "SELECT colaborador.NOME, avaliacao.ID_COLABORADOR_AVALIADO, avaliacao.STATUS, avaliacao.ID_AVALIACAO FROM colaborador, avaliacao WHERE avaliacao.ID_COLABORADOR_AVALIADOR = '$id_colaborador' and colaborador.ID_COLABORADOR = avaliacao.ID_COLABORADOR_AVALIADO and avaliacao.TIPO_AVALIACAO='360'";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}
