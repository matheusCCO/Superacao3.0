<section>
    <div>
        <?php
        if (isset($_GET['id'])) {
            $avaliado = $_GET['nome'];
            $idAvaliado = $_GET['id'];
            echo "<div ><h3>Ralizar o feedback do colaborador " . $avaliado . "</h3>"; ?>
            <form method="post">
                <div>
                    <div>
                        <label>Começar</label>
                        <textarea name="comecar" rows="10" cols="30"></textarea>
                    </div>
                    <div>
                        <label>Parar</label>
                        <textarea name="parar" rows="10" cols="30"></textarea>
                    </div>

                    <div>
                        <label>Continuar</label>
                        <textarea name="continuar" rows="10" cols="30"></textarea>
                    </div>
                </div>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        <?php } ?>
    </div>

</section>