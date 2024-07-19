<section>
    <h1>Avaliação do Gestor</h1>
    <button type="button" class="collapsible"><?php echo $date; ?></button>
    <div class="conten">

        <?php
        if (empty($avaliacao_gestor)) {
            echo "<h2>Sua avaliação não foi realizada ainda</h2>";
        } else {

            foreach ($avaliacao_gestor as $avaliacoes) {
                $justificativa = $avaliacoes['JUSTIFICATIVA'];
                $nota = $avaliacoes['NOTA_RESULTADO'];
        ?>
                <h2>Nota Final: <?php echo $nota; ?></h2>
                <textarea disabled cols="30" rows="10"><?php echo $justificativa ?></textarea>
        <?php }
        } ?>

    </div>
</section>