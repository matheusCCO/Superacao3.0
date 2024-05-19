<?php  require_once "../../backEnd/servidor/server.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/steyleTelaSolicitaAvaliacao.css" />
    <title>Login</title>
</head>
<body>

    <?php require "../layout/topo.php"; ?>

    <main>
    
    <div class="divLogin">
    <h1>SUPERAÇÃO 3.0</h1>
        
        <form method="GET">
           <div class="div-input">
                <h3>Escolher meus avaliadores</h3>
                <input type="name" name="nome" placeholder="Nome Completo">
            </div>

            <div class="div-submit">
                <input type="submit" name="buscaAvaliador360" value="Buscar Avaliador">
            </div>
        </form>
        <?php $results = buscaAvaliador360($connect);
            
        
        ?>
    </div>
    </main>
</body>
</html>