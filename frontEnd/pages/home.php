<?php require_once "../../backEnd/utils/mostrar_minhas_avaliacoes.php";
require_once "../../backEnd/utils/mostrar_avaliacao_gestor.php";

session_start();
session_regenerate_id(); ?>
<!DOCTYPE html>
<html lang="pt-br">

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
    if ($_SESSION['perfil'] == '2') {
      require "../layout/topo_gestor.php";
    } else {
      require "../layout/topo.php";
    }

    $minhas_avaliacoes = mostrar_minhas_avaliacoes($connect, $_SESSION['id_colaborador']);
    $avaliacao_gestor = mostrar_avaliacao_gestor($connect, $_SESSION['id_colaborador']);
    $date = date("Y");
  ?>
    <main>

      <?php require "../layout/sessao_mostra_avaliacao_360.php"; ?>
      <div></div>
      <?php require "../layout/sessao_mostra_avaliacao_gestor.php"; ?>

    </main>


    <script src="js/collapsible.js"></script>

    <?php require "../layout/roda_pe.php"; ?>

  <?php } else {
    header("location: ../../index.php");
  } ?>

</body>

</html>