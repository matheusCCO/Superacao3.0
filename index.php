<?php  require_once "backEnd/utils/fn_login.php";?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="frontEnd/style/styleTelaLogin.css">
    <link rel="website icon" type="png" href="frontend/img/superacao.png">
    <title>Login</title>
</head>
<body>
    <main>
    
    <div class="divLogin">
    <h1>SUPERAÇÃO 3.0</h1>
        
        <form method="POST">
           <div class="div-input">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
            </div>

            <div class="div-submit">
                <input type="submit" name="logar" value="Login">
            </div>
        </form>
        <?php  login($connect)?>
    </div>
    </main>
</body>
</html>