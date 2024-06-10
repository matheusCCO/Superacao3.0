<?php require_once "../../backEnd/servidor/server.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/steyleTelaSolicitaAvaliacao.css" />
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
        <?php require "../layout/secaoValidaAvaliador.php"; ?>
        <?php $resultadoAvaliadores = meusAvaliadores($connect, $_SESSION['id_colaborador']); ?>
        <?php require "../layout/mostraAvaliadores.php"; ?>



    </main>

    <?php require "../layout/rodaPe.php"; ?>
</body>



</html>