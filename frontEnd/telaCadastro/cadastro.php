<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleCadastro.css">
    <title>Login</title>
</head>
<body>
    <main>
    
    <div class="divLogin">
    <h1>SUPERAÇÃO 3.0</h1>
        
        <form method="POST">
           <div class="div-input">
                <input type="name" name="nome" placeholder="Nome Completo">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
            </div>

            <div class="div-submit">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </div>
        </form>
        <?php // login($connect)?>
    </div>
    </main>
</body>
</html>