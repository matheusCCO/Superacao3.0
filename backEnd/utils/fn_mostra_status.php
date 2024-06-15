<?php require_once('db_connect.php');
function mostraStatus($connect, $idAvaliador){
    $query = "SELECT colaborador.NOME , avaliacao.STATUS, avaliacao.ID_AVALIADOR, avaliacao.ID_COLABORADOR FROM colaborador, avaliacao WHERE avaliacao.ID_AVALIADOR = '$idAvaliador' and avaliacao.ID_AVALIADOR = colaborador.ID_COLABORADOR";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}
?>