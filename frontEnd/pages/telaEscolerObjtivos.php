<?php require_once "../../backEnd/servidor/server.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleTelaEscolerObjetivos.css"/>
    <title>Escoler meus Objtivos</title>
</head>
<body>
    <?php require "../layout/topo.php"; ?>
    <h1>Contratação de Obetivos</h1>
    
    <main>
        <section>
            <form method="GET">
                <label>Objetivo</label>
                <input type="text">
                <label>Peso(%)</label>
                <input type="number" class="input-number">
                <label>Perpectiva</label>
                <select name="perpectiva">
                    <option value=""> </option>
                    <option value="pessoa">Pessoa</option>
                    <option value="financeiro">Financeiro</option>
                    <option value="cliente">Cliente</option>
                    <option value="Processo">Processo</option>
                </select>
            </form>
        </section>
    </main>
    
</body>
</html>