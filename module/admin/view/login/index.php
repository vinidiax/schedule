<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Site Properties -->
        <title>Bootstrap 4 Login Form</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <form class="form-horizontal" role="form" method="POST" action="?module=admin&controller=login&action=logar">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2>Faça o login</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group has-danger">
                            <label class="sr-only" for="email">E-mail</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                <input type="text" name="usuario" class="form-control" id="email"
                                       placeholder="Usuário" required autofocus>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="sr-only" for="password">Senha</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                <input type="password" name="senha" class="form-control" id="senha"
                                       placeholder="Senha" required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                        <hr/>
                        <?php if(isset($menssagemErro)):?>
                            <div class="alert alert-danger"><?=$menssagemErro?></div>
                        <?php endif; ?>
                    </div>

                </div>

            </form>
        </div>
    </body>
</html>