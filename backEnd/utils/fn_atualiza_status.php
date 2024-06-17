<?php require_once('db_connect.php');
function  aualizaStatus($connect, $idAvaliador, $idAvaliado)
{
    $query = "UPDATE avaliacao SET STATUS = 2 WHERE avaliacao.ID_COLABORADOR_AVALIADOR ='$idAvaliador'  AND avaliacao.ID_COLABORADOR_AVALIADO = '$idAvaliado'";
    $execute = mysqli_query($connect, $query);
}
