<?php 
require_once "../../backEnd/utils/fn_busca_avaliadores_360.php";
require_once "../../backEnd/utils/fn_meus_avaliadores.php";
require_once "../../backEnd/utils/fn_solicita_avaliador.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/steyleTelaSolicitaAvaliacao.css" />
    <link rel="website icon" type="png" href="../img/superacao.png">
    <title>Seleção de Avaliadores</title>
</head>

<body>

    <?php require "../layout/topo.php"; ?>

    <main>
        <section> 

            <h1>Escolher meus avaliadores</h1>
            <div class="divBusca">
                <form method="GET">
                    <div class="div-input">
                        <input class="btn-input" type="name" name="nome" placeholder="Avaliador">
                    </div>

                    <div class="div-submit">
                        <input class="btn" type="submit" name="buscaAvaliador360" value="Buscar Avaliador">
                    </div>
                </form>
            </div>
        </section>
        <?php require_once "../layout/sessao_valida_avaliador.php"; ?>
        <?php $resultadoAvaliadores = meusAvaliadores($connect, $_SESSION['id_colaborador']); ?>
        <?php require_once "../layout/sessao_mostrar_avaliadores.php"; ?>
    </main>

    <?php require "../layout/roda_pe.php"; ?>
</body>

</html>