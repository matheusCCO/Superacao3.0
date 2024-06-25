<section>
    <h1>Avaliação 360:</h1>
    <button type="button" class="collapsible"><?php echo $date; ?></button>
    <div class="content">

        <table>
            <tr>
                <th>Avaliador</th>
                <th>Começar</th>
                <th>Parar</th>
                <th>Continuar</th>
            </tr>
            <?php
            foreach ($minhas_avaliacoes as $avaliacoes) {
                $nome = $avaliacoes['NOME'];
                $comecar = $avaliacoes['COMECAR'];
                $para = $avaliacoes['PARAR'];
                $continuar = $avaliacoes['CONTINUAR'];
            ?>
                <tr>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $comecar; ?></td>
                    <td><?php echo $para; ?></td>
                    <td><?php echo $continuar; ?></td>
                </tr>


            <?php } ?>
        </table>
    </div>
</section>