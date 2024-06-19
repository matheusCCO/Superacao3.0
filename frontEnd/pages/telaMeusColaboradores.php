<?php require_once "../../backEnd/utils/fn_meus_colaboradores.php";
session_start(); ?>

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

<body>
    <?php
    require "../layout/topo_gestor.php"; ?>
    <main>
        <?php require "../layout/sessao_mostrar_meus_colaboradores.php"; ?>
    </main>

</body>

</html>