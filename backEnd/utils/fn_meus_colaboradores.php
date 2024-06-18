<?php require_once('db_connect.php');

function meus_colaboraores($connect, $nomeGestor){
    $query = "SELECT colaborador.NOME FROM colaborador WHERE colaborador.CHEFIA ='$nomeGestor'";
    $execute = mysqli_query($connect,$query);
    $results = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    return $results;
}


?>