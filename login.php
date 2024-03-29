    
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <title>Login</title>
    <style>
        #caixaRecuperarSenha,
        #alerta {
            display: none;
        }
    </style>
</head>
<body class="bg-light">
    <main class="container mt-4">
        <!-- Formulário de Login -->
        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded border border-dark" id="caixaLogin">
                <h2 class="text-center mt-2">Entrada no sistema</h2>
                <form action="#" id="formLogin" class="p-2">
                    <div class="form-group">
                        <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control border border-dark" placeholder="Nome do usuário" minlength="5" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaUsuario" id="senhaUsuario" class="form-control border border-dark" placeholder="Senha" required minlength="6">
                    </div>
                    <div class="form-group mt-5">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="lembrar" id="lembrar" class="custom-control-input">
                            <label for="lembrar" class="custom-control-label">
                                Lembrar de mim.
                            </label>
                            <a href="#" id="btnEsqueci" class="float-right">
                                Esqueci a senha!
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value=" Entrar " name="btnEntrar" id="btnEntrar" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="center">Novo usuário?
                            <a href="registro.php" id="btnCadastrar">Cadastre-se aqui.</a>
                        </p>
                    </div>
                    <div class="form-group float-right">
                        <a href="index.php" id="btnVoltaIndex">Voltar</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- Formulário de recuperação de senha -->
        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded border border-dark" id="caixaRecuperarSenha">
                <h2 class="text-center">Gerar nova senha</h2>
                <form action="#" id="formSenha">
                    <div class="form-group">
                        <small class="text-muted">
                            Para gerar uma nova senha, digite seu e-mail
                            e receba as instruções.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="emailSenha" id="emailSenha" class="form-control border border-dark" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value=" Enviar e-mail " id="btnEnviarEmail" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group float-right">
                        <a href="#" id="btnVoltar">Voltar</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
        /* jQuery */
        $(function() {
            //Trocar da Tela de Login para Recuperar Senha
            $("#btnEsqueci").click(function() {
                $("#caixaLogin").hide();
                $("#caixaRecuperarSenha").show();
            });
            $('#btnVoltar').click(function(){
                $("#caixaRecuperarSenha").hide();
                $("#caixaLogin").show();
            });

            $("#formLogin").validate();
            $("#formSenha").validate();
            $.validator.setDefaults({
                success: "valid"
            });
            $("#formCadastro").validate({
                rules: {
                    senhaConfirma: {
                        equalTo: "#senhaUsuário"
                    }
                }
            });
        });
        /*
         * Translated default messages for the jQuery validation plugin.
         * Locale: PT_BR
         */
        jQuery.extend(jQuery.validator.messages, {
            required: "Este campo &eacute; requerido.",
            remote: "Por favor, corrija este campo.",
            email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
            url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
            date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
            dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
            number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
            digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
            creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
            equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
            accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
            maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
            minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
            rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
            range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
            max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
            min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
        });
    </script>
</body>
</html>