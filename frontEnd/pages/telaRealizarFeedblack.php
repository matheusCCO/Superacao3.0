<?php require_once "../../backEnd/servidor/server.php";
session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/steyleTelaRealizarFeedbacks.css" />
    <link rel="website icon" type="png" href="../img/superacao.png">
    <title>Realizar FeedBlack</title>
    
</head>

<body>
    <?php require "../layout/topo.php"; $idAvaliador = $_SESSION['id_colaborador']?>
    <section>
        <table>
            <tr>
                <th>Colaboradores para avaliação</th>
                <th>Ação</th>
            </tr>
            <?php
            $avaliados = mostrarAvaliados($connect, $_SESSION['id_colaborador']);
            foreach ($avaliados as $mostrarAvaliado) {
                $avaliado = $mostrarAvaliado['NOME'];
                $idAvaliado = $mostrarAvaliado['ID_COLABORADOR_AVALIADOR'];
            ?>
                <tr>
                    <td><?php echo $avaliado; ?></td>
                    <td><a href="telaRealizarFeedblack.php?id=<?php echo $idAvaliado;?>"> <img src="../img/editar.png" alt="Realizar Feedback"></a></td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <section>
        <div>
            <?php 
                if (isset($_GET['id'])) {
                    echo "<div ><h3>Ralizar o feedback do colaborador ". $_GET['id'] . "</h3>"; 
                    $idAvaliado = $_GET['id'];
                    ?>
                    <form  method="post">
                        <div>
                            <div>
                                <label>Começar</label>
                                <textarea  name="comecar" rows="10" cols="30"></textarea>
                            </div>
                            <div>
                                <label>Parar</label>
                                <textarea  name="parar" rows="10" cols="30"></textarea>
                                
                            </div>
                            
                            <div>
                                <label>Continuar</label>
                                <textarea  name="continuar" rows="10" cols="30"></textarea>
                            </div>
                        </div>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>
            <?php } ?>
        </div>
        <?php
            if(isset($_POST['enviar'])){
                addFeedBack360($connect,$idAvaliado,$idAvaliador);
            }
        ?>
    </section>
</body>

</html> 