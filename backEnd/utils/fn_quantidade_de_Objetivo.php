<?php require_once('db_connect.php');
function quantidadeDeObjetivos($connect, $id_colaborador)
{
    $query = "SELECT DESCRICAO_OBJETIVO FROM objetivo WHERE ID_COLABORADOR = '$id_colaborador'";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return count($results);
}
?>