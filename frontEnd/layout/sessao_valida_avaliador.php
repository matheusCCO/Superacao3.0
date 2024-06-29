<section>
    <div>
        <?php
        $resultadoDaBusca = buscaAvaliador360($connect, $_SESSION['nome'], $_SESSION['chefia']);
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
            $id_colaborador_avaliador = $_POST['id_colaborador'];
            $id_colaborador_avaliado = $_POST['id_solicitante'];
            solicitaAvaliador($connect, $id_colaborador_avaliado, $id_colaborador_avaliador);
        }
        if (isset($_POST['nao'])) {
            header("location: telaEscolerAvaliadores360.php");
        }
        ?>
    </div>
</section>