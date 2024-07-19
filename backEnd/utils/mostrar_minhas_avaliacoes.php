<?php require_once('db_connect.php');

function mostrar_minhas_avaliacoes($connect, $idAvaliado)
{
    $query = "SELECT colaborador.NOME, resultado.COMECAR, resultado.PARAR, resultado.CONTINUAR FROM colaborador, resultado, avaliacao WHERE avaliacao.ID_COLABORADOR_AVALIADOR = colaborador.ID_COLABORADOR AND avaliacao.ID_COLABORADOR_AVALIADO ='$idAvaliado' AND avaliacao.ID_AVALIACAO = resultado.ID_AVALIACAO and avaliacao.TIPO_AVALIACAO = '360'";
    $execute = mysqli_query($connect, $query);
    $resultado = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    return $resultado;
}
