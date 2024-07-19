<?php require_once('db_connect.php');
function  meusAvaliadores($connect, $id_colaborador)
{
    $query = "SELECT colaborador.NOME FROM colaborador, avaliacao WHERE avaliacao.ID_COLABORADOR_AVALIADOR = colaborador.ID_COLABORADOR AND avaliacao.ID_COLABORADOR_AVALIADO ='$id_colaborador' and avaliacao.TIPO_AVALIACAO='360';";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}
