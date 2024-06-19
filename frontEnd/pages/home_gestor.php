<?php require_once "../../backEnd/utils/mostrar_minhas_avaliacoes.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Superação</title>
    <link rel="stylesheet" href="../style/styleTelaHome.css" />
    <link rel="website icon" type="png" href="../img/superacao.png">
</head>

<body>

    <?php if (isset($_SESSION['ativa'])) {
        if($_SESSION['perfil']=='2'){
            require "../layout/topo_gestor.php";
        } else{
            require "../layout/topo.php";
        }
        
        $minhas_avaliacoes = mostrar_minhas_avaliacoes($connect, $_SESSION['id_colaborador']);
        $date = date("Y");
    ?>
        <main>
            <p><?php echo $_SESSION['nome'];?></p>
            <h1>FeedBack 360: </h1>
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
        </main>
        <?php require "../layout/roda_pe.php"; ?>

        <script src="js/collapsible.js"></script>
    <?php } else {echo "sessão não ativa";} ?>
</body>

</html>