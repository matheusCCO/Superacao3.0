<?php if (isset($_SESSION['ativa'])) {

    if (isset($_GET['id'])) {

        $idColaborador = $_GET['id'];
        $objetivosColaboradores = mostra_objetivos_meu_colaborador($connect, $idColaborador); ?>

        <table>
            <tr>
                <th>Objetivo</th>
                <th>Descrição</th>
                <th>Peso</th>
            </tr>
            <?php
            foreach ($objetivosColaboradores as $objetivos) {
                $nomeObjeto = $objetivos['NOME_OBJETIVO'];
                $descricao = $objetivos['DESCRICAO_OBJETIVO'];
                $peso = $objetivos['PESO']; ?>
                <tr>
                    <td> <?php echo $nomeObjeto; ?></td>
                    <td> <?php echo $descricao; ?></td>
                    <td> <?php echo $peso; ?></td>
                </tr>
            <?php  } ?>
        </table>

    <?php } ?>
<?php } ?>