<?php require_once('db_connect.php');
function buscaAvaliador360($connect, $nomeSolicitante, $chefia)
{
    if (isset($_GET['buscaAvaliador360'])) {
        $nome =  ucwords(mysqli_real_escape_string($connect, $_GET['nome']));
        $query = "SELECT * FROM colaborador WHERE NOME = '$nome'";
        $action = mysqli_query($connect, $query);
        $results = mysqli_fetch_assoc($action);
        if (!empty($results)) {
            if ($chefia == $nome || $results['NOME'] == $nomeSolicitante) {
                echo "<p>Colaborador Invalido</p>";
            } else {

                return $results;
            }
        } else {
            echo "<p>Colaborador não encontrado</p>";
        }
    }
}
