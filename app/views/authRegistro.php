<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" c>
        <meta name="viewport" c>
        <title>SGP - entre ou cadastre-se</title>        
        <link href="/SGP/web-files/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/SGP/web-files/css/authRegistro.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <div class="caixa">
                        <form action="/SGP/auth/cadastrar" method="post" role="form">
                            <h2>Cadastro SGP <small>É gratuito e sempre será.</small></h2>
                            <hr class="colorgraph">
                            <?php
                            if (!empty($view_erros)) {
                                echo "<strong>{$view_erros}</strong></br>";
                            }
                            ?>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nome" id="first_name" class="form-control input-lg" placeholder="Primeiro nome" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="ult_name" id="last_name" class="form-control input-lg" placeholder="Último nome" tabindex="2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Endereço de email" tabindex="4">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="senha" id="password" class="form-control input-lg" placeholder="Senha" tabindex="5">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirme a senha" tabindex="6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-3 col-md-3">
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="info" tabindex="7">Eu aceito</button>
                                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                                    </span>
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-9">
                                    Ao clicar em <strong class="label label-primary">Cadastrar</strong>, você concorda com os <a href="#" data-toggle="modal" data-target="#t_and_c_m">Termos e Condições</a> estabelecidos por este site.
                                </div>
                            </div>

                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-12 col-md-6"><input type="submit" value="Cadastre-se" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                <div class="col-xs-12 col-md-6"><a href="/SGP/auth/login" class="btn btn-success btn-block btn-lg">Entrar</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Termos e Condições</h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Eu aceito</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>    
    <script src="/SGP/web-files/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="/SGP/web-files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/SGP/web-files/js/authRegistro.js" type="text/javascript"></script>
</body
</html>