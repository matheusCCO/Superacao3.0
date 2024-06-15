<?php require_once "../../backEnd/utils/fn_mostra_avaliados.php";
require_once "../../backEnd/utils/fn_adiciona_feedback_360.php";
session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/steyleTelaRealizarFeedbacks.css" />
    <link rel="website icon" type="png" href="../img/superacao.png">
    <title>Realizar FeedBlack</title>

</head>

<body>
    <?php require "../layout/topo.php";
    $idAvaliador = $_SESSION['id_colaborador'] ?>
    <main>
        <?php require_once "../layout/sessao_mostrar_avaliados.php"; ?>

        <?php require_once "../layout/sessao_mostrar_formulario_feedback_360.php"; ?>

        <?php require_once "../layout/sessao_envia_feedback.php"; ?>
    </main>
</body>

</html>