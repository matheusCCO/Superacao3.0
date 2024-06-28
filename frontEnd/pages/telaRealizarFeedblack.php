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
    <?php
    if (isset($_SESSION['ativa'])) {
        $idAvaliador = $_SESSION['id_colaborador'];
        if ($_SESSION['perfil'] == 2) {
            require "../layout/topo_gestor.php";
        } else {
            require "../layout/topo.php";
        } ?>
        <main>
            <?php require_once "../layout/sessao_mostrar_avaliados.php"; ?>

            <?php require_once "../layout/sessao_mostrar_formulario_feedback_360.php"; ?>

            <?php require_once "../layout/sessao_envia_feedback.php"; ?>
        </main>

        <?php require "../layout/roda_pe.php"; ?>
</body>

<?php } else {
        header("location: ../../index.php");
    } ?>


</html>