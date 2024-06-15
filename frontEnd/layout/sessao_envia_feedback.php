<section>
    <?php
    if (isset($_POST['enviar'])) {
        $msg = addFeedBack360($connect, $idAvaliado, $idAvaliador, $idAvaliacao);
    }
    ?>
</section>