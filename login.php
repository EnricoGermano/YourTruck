<?php
session_start();
?>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>   
            .login-container{
                margin-top: 5%;
                margin-bottom: 5%;
            }
            .login-form-1{
                padding: 5%;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form-1 h3{
                text-align: center;
                color: #333;
            }
            .login-form-2{
                padding: 5%;
                background: #0062cc;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form-2 h3{
                text-align: center;
                color: #fff;
            }
            .login-container form{
                padding: 10%;
            }
            .btnSubmit
            {
                width: 50%;
                border-radius: 1rem;
                padding: 1.5%;
                border: none;
                cursor: pointer;
            }
            .login-form-1 .btnSubmit{
                font-weight: 600;
                color: #fff;
                background-color: #0062cc;
            }
            .login-form-2 .btnSubmit{
                font-weight: 600;
                color: #0062cc;
                background-color: #fff;
            }
            .login-form-2 .ForgetPwd{
                color: #fff;
                font-weight: 600;
                text-decoration: none;
            }
            .login-form-1 .ForgetPwd{
                color: #0062cc;
                font-weight: 600;
                text-decoration: none;
            }

        </style>
    </head>
    <body>
    <br>
    <br>
    <br>
        <div class="container login-container">
                    <div class="row">
                        <div class="col-md-6 login-form-1">
                            <h3>Motorista</h3>
                            <form action="./confirma_login_motorista.php" method="post">
                                <div class="form-group">
                                    <input type="text" required = "true" id="login" class="form-control" name="usuario" placeholder="Seu Email: " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" required = "true" id="password" class="form-control" name="senha" placeholder="Sua Senha: " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="entrar" />
                                </div>
                                <div class="form-group">
                                    <a href="#" class="ForgetPwd">Esqueci minha senha?</a>
                                </div>
                                <div class="form-group">
                                    <a href="cadastro_motorista.php" class="ForgetPwd">Não sou cadastrado</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 login-form-2">
                            <h3>Cliente</h3>
                            <form action="./confirma_login.php" method="post">
                                <div class="form-group">
                                    <input type="text" required = "true" id="login" class="form-control" name="usuario" placeholder="Seu Email: " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" required = "true" id="password" class="form-control" name="senha" placeholder="Sua Senha: " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="entrar" />
                                </div>
                                <div class="form-group">
                                    <a href="#" class="ForgetPwd">Esqueci minha senha?</a>
                                </div>
                                <div class="form-group">
                                    <a href="cadastro_cliente.php" class="ForgetPwd">Não sou cadastrado</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </body>
</html>

