<?php require_once "../../backEnd/servidor/server.php";
session_start(); ?>
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
  <?php if (isset($_SESSION['ativa'])) { ?>
    <?php require "../layout/topo.php";
    ?>
    <main>
      <h1>FeedBack 360:</h1>
      <?php $ciclos = array(1, 2, 3, 4);
      foreach ($ciclos as $ciclo) { ?>
        <button type="button" class="collapsible"><?php echo "202" . $ciclo; ?></button>
        <div class="content">
          <table>
            <tr>
              <th>Avaliador</th>
              <th>Começar</th>
              <th>Parar</th>
              <th>Continuar</th>
            </tr>
            <tr>
              <td>Jill</td>
              <td>Ver chamados</td>
              <td>Qualquer coisa</td>
              <td>Falandoi</td>
            </tr>
            <tr>
              <td>Eve</td>
              <td>Ver chamados</td>
              <td>Qualquer coisa</td>
              <td>Falandoi</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>Ver chamados</td>
              <td>Qualquer coisa</td>
              <td>Falandoi</td>
            </tr>
          </table>
        </div>
      <?php } ?>
    </main>
    <?php require "../layout/roda_pe.php"; ?>

    <script src="js/collapsible.js"></script>
  <?php } ?>
</body>

</html>