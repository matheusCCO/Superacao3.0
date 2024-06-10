<?php require_once "../../backEnd/servidor/server.php";
session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/steyleTelaRealizarFeedbacks.css" />

    <title>Realizar FeedBlack</title>
    <link rel="website icon" type="png" href="../img/superacao.png">
</head>

<body>
    <?php require "../layout/topo.php"; ?>
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
            ?>
                <tr>
                    <td><?php echo $avaliado; ?></td>
                    <td><a href="#"> <img src="../img/editar.png" alt="Deletar"></a></td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <section>
        <div>
            <form method="GET"></form>
        </div>
    </section>
</body>

</html>