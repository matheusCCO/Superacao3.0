<?php require_once('db_connect.php');
function buscaAvaliador360($connect)
{
    if (isset($_GET['buscaAvaliador360'])) {
        $nome =  mysqli_real_escape_string($connect, $_GET['nome']);
        $query = "SELECT * FROM colaborador WHERE NOME = '$nome'";
        $action = mysqli_query($connect, $query);
        $results = mysqli_fetch_assoc($action);
        if (!empty($results)) {
            //echo "<p>".$results["NOME"]."  ".$results["FUNCAO"]."</p>";
            return $results;
        } else {
            echo "<p>Colaborador não encontrado</p>";
        }
    }
}

?>