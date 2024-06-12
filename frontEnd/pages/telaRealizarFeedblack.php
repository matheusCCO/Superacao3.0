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
    <main>
        <section>
            <table>
                <tr>
                    <th>Colaboradores para avaliação</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
                <?php
                $avaliados = mostrarAvaliados($connect, $_SESSION['id_colaborador']);
                $status = mostraStatus($connect);
                foreach ($avaliados as $mostrarAvaliado) {
                    $avaliado = $mostrarAvaliado['NOME'];
                    $idAvaliado = $mostrarAvaliado['ID_COLABORADOR_AVALIADO'];
                ?>
                    <tr>
                        <td><?php echo $avaliado; ?></td>
                        <td><img src="../img/atencao.png" alt="Realizar Feedback"></td>
                        <td><a href="telaRealizarFeedblack.php?id=<?php echo $idAvaliado;?>&nome=<?php echo $avaliado;?>"> <img src="../img/editar.png" alt="Realizar Feedback"></a></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
        <section>
            <div>
                <?php 
                    if (isset($_GET['id'])) {
                            $avaliado=$_GET['nome'];
                            $idAvaliado = $_GET['id'];
                            criaAvaliacao($connect,$idAvaliado,$_SESSION['id_colaborador']);
                            echo "<div ><h3>Ralizar o feedback do colaborador ". $avaliado . "</h3>"; 
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
            
        </section>
        <section>
            <?php
                    if(isset($_POST['enviar'])){
                        $msg=addFeedBack360($connect,$idAvaliado,$idAvaliador);
                    }
                ?>
        </section>
    </main>
</body>

</html> 