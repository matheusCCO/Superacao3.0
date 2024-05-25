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
            <?php echo $_SESSION['id_colaborador']; ?>
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

        <section>
            <div>
                <?php
                $resultadoDaBusca = buscaAvaliador360($connect);
                if (isset($resultadoDaBusca)) {
                    echo "<p>Nome: " . $resultadoDaBusca["NOME"] . "</p>";
                    echo "<p>E-mail: " . $resultadoDaBusca["EMAIL"] . "</p>";
                    echo "<p>Função: " . $resultadoDaBusca["FUNCAO"] . "</p>";
                    echo "<p>Departamento: " . $resultadoDaBusca["DEPARTAMENTO"] . "</p>";

                    echo "<scan>Confirmar este colaborador como seu avaliador?</scan>";
                ?>
                    <form method="post">
                        <input type="hidden" name="id_colaborador" value="<?php echo $resultadoDaBusca["ID_COLABORADOR"] ?>">
                        <input type="hidden" name="departamento" value="<?php echo $resultadoDaBusca["DEPARTAMENTO"] ?>">
                        <input type="hidden" name="id_solicitante" value="<?php echo $_SESSION['id_colaborador']; ?>">
                        <button name="sim">Sim</button>
                        <button name="nao">Não</button>
                    </form>
                <?php } ?>

                <?php
                if (isset($_POST['sim'])) {
                    $id_colaborador = $_POST['id_colaborador'];
                    $departamento = $_POST['departamento'];
                    $id_solicitante = $_POST['id_solicitante'];
                    solicitaAvaliador($connect, $id_colaborador, $departamento, $id_solicitante);
                }
                if (isset($_POST['nao'])) {
                    header("location: telaEscolerAvaliadores360.php");
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>