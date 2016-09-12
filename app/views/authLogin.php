<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>SGP - entre ou cadastre-se</title>
        <link href="/SGP/web-files/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/SGP/web-files/css/authLogin.css" rel="stylesheet" type="text/css"/>
        <script src="/SGP/web-files/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="login-box">
            <form class="form-signin" method="post" action="/SGP/auth/login/acao/login">
                <h3 class="form-signin-heading">Sistema Gerenciador de Provas</h3></br>
                <?php
                if ($view_erros == TRUE) {
                    echo '<strong>Usuário ou senha inválidos</strong></br>';
                }
                ?>
                <input type="text" id="email" class="form-control" name="email" required autofocus placeholder="Email">
                <input type="password" id="senha" class="form-control" name="senha" required placeholder="Senha">
                
                <button class="btn btn-primary" type="submit">Entre</button>
                <a href="/SGP/auth/cadastro" class="btn btn-default">Cadastre-se</a>
            </form>
        </div>
    </body>
</html>