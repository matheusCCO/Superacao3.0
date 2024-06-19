<?php session_start();
require_once("../../backEnd/utils/fn_mostra_objetivos_meu_colaborador.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Superação</title>
    <link rel="stylesheet" href="../style/steyleTelaMeusColaboradores.css" />
    <link rel="website icon" type="png" href="../img/superacao.png">
</head>
<?php require "../layout/topo_gestor.php"; ?>

<body>
    <section>
        <?php require_once("../layout/sessao_mostra_objetivos_meu_colaborador.php"); ?>
    </section>
</body>

</html>