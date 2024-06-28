<?php require_once "../../backEnd/utils/fn_adiciona_objetivo.php";
session_start();
require_once "../../backEnd/utils/fn_mostra_meus_objetivos.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleTelaEscolerObjetivos.css" />
    <link rel="website icon" type="png" href="../img/superacao.png">
    <title>Escoler meus Objtivos</title>
</head>

<body>
    <?php
    if (isset($_SESSION['ativa'])) {
        if ($_SESSION['perfil'] == 2) {
            require "../layout/topo_gestor.php";
        } else {
            require "../layout/topo.php";
        }
    ?>
        <h1>Contratação de Obetivos</h1>

        <main>
            <section>
                <div class="formulario">
                    <form method="get">
                        <label>Objetivo</label>
                        <input class="input-obj" type="text" name="objetivo">

                        <label>Peso(%)</label>
                        <input type="number" class="input-number" name="peso">

                        <div>
                            <label>Descrição</label>
                            <textarea rows="10" cols="50" name="descricao"></textarea>
                            <input class="btn" type="submit" name="adicionar" value="Adicionar">
                        </div>
                    </form>
                </div>
            </section>
            <?php
            $id_colaborador = $_SESSION['id_colaborador'];
            addObjetivos($connect, $id_colaborador);
            ?>
            <?php require "../layout/mostrar_meus_objetivos.php"; ?>
        </main>
        <?php require "../layout/roda_pe.php"; ?>
    <?php } else {
        header("location: ../../index.php");
    } ?>

</body>

</html>