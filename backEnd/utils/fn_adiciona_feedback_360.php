<?php require_once('db_connect.php');
require_once('fn_atualiza_status.php');
function addFeedBack360($connect, $idAvaliado, $idAvaliador, $idAvaliacao)
{

    $comecar = mysqli_real_escape_string($connect, $_POST['comecar']);
    $parar = mysqli_real_escape_string($connect, $_POST['parar']);
    $continuar = mysqli_real_escape_string($connect, $_POST['continuar']);
    if (!empty($comecar) && !empty($parar) && !empty($continuar)) {
        $query = "INSERT INTO resultado (ID_COLABORADOR_AVALIADO, ID_COLABORADOR_AVALIADOR, COMECAR, PARAR, CONTINUAR, ID_AVALIACAO) VALUES ('$idAvaliado','$idAvaliador', '$comecar', '$parar', '$continuar', $idAvaliacao)";
        $execute = mysqli_query($connect, $query);
        if ($execute) {
            aualizaStatus($connect, $idAvaliador, $idAvaliado);
            echo "<style>div{display:none}</style>";
            echo "<div class='retornoSucceso'><h3 class='msg'>FeedBack realizado com sucesso</h3></div>";
        } else {
            echo "<div class='retornoSucceso'><h3 class='msg'>FeedBack realizado com sucesso</h3></div>";
        }
    } else {
        echo "<div class='retornoAlerta'><h3 class='msg'>Prencha todas os campos</h3></div>";
    }
}
