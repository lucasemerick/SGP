<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Lucas Mee">
        <!--<link rel="icon" href="../../favicon.ico">-->

        <title>SGP - Home</title>

        <!-- Bootstrap core CSS -->
        <link href="/SGP/web-files/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="/SGP/web-files/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css"/>

        <!-- Custom styles for this template -->
        <link href="/SGP/web-files/css/dashboard.css" rel="stylesheet" type="text/css"/>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="/SGP/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Sistema Gerenciador de Provas</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Configurações</a></li>
                        <li><a href="#">Conta</a></li>
                        <li><a href="/SGP/auth/logout/acao/logout">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Questões</a></li>
                        <li><a href="#">Provas</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="">Cursos</a></li>
                        <li><a href="">Turmas</a></li>
                        <li><a href="">Disciplinas</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h3 class="page-header">Questões recentes</h3>

                    <div class="row placeholders"></div>

                    <h3 class="page-header">Provas recentes</h3>

                    <div class="row placeholders"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../web-files/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="/SGP/web-files/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/SGP/web-files/js/holder.min.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/SGP/web-files/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
</body>
</html>
