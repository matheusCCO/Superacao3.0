<section>
    <table>
        <tr>
            <th>Colaboradores para avaliação</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        <?php
        $avaliados = mostrarAvaliados($connect, $_SESSION['id_colaborador']);
        //$status = mostraStatus($connect,$_SESSION['id_colaborador']);
        foreach ($avaliados as $mostrarAvaliado) {
            $avaliado = $mostrarAvaliado['NOME'];
            $idAvaliado = $mostrarAvaliado['ID_COLABORADOR_AVALIADO'];
            $status = $mostrarAvaliado['STATUS'];
            $idAvaliacao = $mostrarAvaliado['ID_AVALIACAO'];
        ?>
            <tr>
                <td><?php echo $avaliado; ?></td>
                <td><?php if ($status == 1) {
                        echo "<img src='../img/atencao.png' alt='Realizar Feedback'>";
                    } else {
                        echo "<img src='../img/confirme.png' alt='Feedback realizado'>";
                    } ?></td>
                <td><a href="telaRealizarFeedblack.php?id=<?php echo $idAvaliado; ?>&nome=<?php echo $avaliado; ?>"> <img src="../img/editar.png" alt="Realizar Feedback"></a></td>
            </tr>
        <?php } ?>
    </table>
</section>