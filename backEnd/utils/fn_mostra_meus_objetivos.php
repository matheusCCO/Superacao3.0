<?php require_once('db_connect.php');
function mostrarMeusObjetivos($connect, $id_colaborador)
{

    $query = "SELECT NOME_OBJETIVO, DESCRICAO_OBJETIVO, PESO FROM objetivo WHERE ID_COLABORADOR = '$id_colaborador'";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}
