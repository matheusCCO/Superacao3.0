<section>
    <table>
        <tr>
            <th>Meus Colaboradores</th>
            <th>Ver objetivos contratados</th>
            <th>Realizar feed back</th>
        </tr>
        <?php
        $meusColaboradores = meus_colaboraores($connect, $_SESSION['nome']);
        foreach ($meusColaboradores as $colaboradores) {
            $colaborador = $colaboradores['NOME'];
        ?>
            <tr>
                <td><?php echo $colaborador ?></td>
                <td> <a href="telaObjetivos.php"><img src='../img/objetivo.png' title="Objetivos" alt='Realizar Feedback'></a></td>
                <td> Objetivos</td>

            </tr>
        <?php } ?>

    </table>
</section>