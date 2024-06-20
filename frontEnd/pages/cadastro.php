<?php require_once("../../backEnd/utils/fn_cadastro_colaborador.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleTelaCadastro.css">
    <title>Login</title>
</head>
<?php require "../layout/topo_gestor.php"; ?>

<body>
    <main>

        <div class="divLogin">
            <h1>SUPERAÇÃO 3.0</h1>

            <form method="POST">
                <div class="div-input">
                    <input type="text" name="nome" placeholder="Nome Completo">
                    <input type="text" name="funcao" placeholder="Função">
                    <input type="text" name="departamento" placeholder="Departamento">
                    <input type="text" name="chefia" placeholder="Chefia">
                    <label>Perfil: </label>
                    <select name="perfil" placeholder="Perfil">
                        <option value=" "></option>
                        <option value="1">Colaborador</option>
                        <option value="2">Gestor</option>
                    </select>
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <div class="div-submit">
                    <input type="submit" name="cadastrar" value="Cadastrar">
                </div>
            </form>
            <?php cadastrar_colaborador($connect);
            ?>
        </div>
    </main>
</body>

</html>