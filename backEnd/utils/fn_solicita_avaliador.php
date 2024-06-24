<?php require_once('db_connect.php');
function solicitaAvaliador($connect, $id_colaborador_avaliado, $id_colaborador_avaliador)
{

    $query = "INSERT INTO avaliacao (ID_COLABORADOR_AVALIADO, ID_COLABORADOR_AVALIADOR, STATUS, TIPO_Avaliacao) VALUES ( ' $id_colaborador_avaliado','$id_colaborador_avaliador', 1, '360')";
    $execute = mysqli_query($connect, $query);
    if ($execute) {
        //criaAvaliacao($connect, $id_colaborador_avaliado, $id_colaborador_avaliador);
        header("location: ../../frontEnd/pages/telaEscolerAvaliadores360.php");
    } else {
        echo "<h2 class='msg'>Erro ao inserir.</h2>";
    }
}
