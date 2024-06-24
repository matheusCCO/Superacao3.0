<?php session_start();
require_once('../../backend/utils/fn_avaliacao_gestor.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/telaRealizaFeedBackMeuColaborador.css" />
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['ativa'])) {
        require "../layout/topo_gestor.php"; ?>

        <main>
            <section>
                <h2>Avaliação do <?php echo $_GET['nome']; ?></h2>
                <form method="post">
                    <div>
                        <label>Nota: </label>
                        <input class="input-number" type="number" value="Enviar" name="nota" step=".01" min="0" max="5">
                    </div>

                    <textarea name="avaliacao" id="" cols="70" rows="20"></textarea>

                    <input class="btn" type="submit" value="Enviar" name="enviar">
                </form>
            </section>
        </main>
    <?php if (isset($_POST['enviar'])) {

            avaliacao_gestor($connect, $_GET['id'], $_SESSION['id_colaborador']);
        }
    } ?>
</body>

</html>