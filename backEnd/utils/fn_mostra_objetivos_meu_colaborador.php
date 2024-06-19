<?php
require_once('db_connect.php');

function mostra_objetivos_meu_colaborador($connect, $idColaborador)
{
    $query = "SELECT colaborador.NOME, objetivo.NOME_OBJETIVO, objetivo.DESCRICAO_OBJETIVO, objetivo.PESO FROM colaborador, objetivo WHERE colaborador.ID_COLABORADOR = objetivo.ID_COLABORADOR and colaborador.ID_COLABORADOR = '$idColaborador'";
    $execute = mysqli_query($connect, $query);
    $resultado = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    return $resultado;
}
