<?php require_once "../../backEnd/servidor/server.php"; session_start()?>

<!DOCTYPE html>
<html lang="pt-BR">
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
            <div class="formulario">
                <form method="get">
                    <label>Objetivo</label>
                    <input class="input-obj" type="text" name="objetivo">
                    <label>Peso(%)</label>
                    <input type="number" class="input-number">
                <label>Perpectiva</label>
                    <select class= "input-perpectiva"name="perpectiva" >
                        <option value=""> </option>
                        <option value="pessoa">Pessoa</option>
                        <option value="financeiro">Financeiro</option>
                        <option value="cliente">Cliente</option>
                        <option value="Processo">Processo</option>
                    </select>
                    <input class="btn" type="submit" name="adicionar" value="Adicionar">
                </form>
            </div>
           
        </section>

        
            <?php 
                $id_colaborador = $_SESSION['id_colaborador'];
                addObjetivos($connect, $id_colaborador);
            ?>
            <?php require "../layout/mostrarMeusObjetivos.php"; ?>
    </main>
</body>
</html>