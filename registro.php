<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <title>Registro</title>
    <style>
        #caixalogin,
        #caixaRecuperarSenha,
        #alerta {
            display: none;
        }
    </style>
</head>
<body class="bg-light">
    <main class="container mt-4">
        <!-- Formulário de Cadastro -->
        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded border border-dark" id="caixaCadastro">
                <h2 class="text-center">Cadastro de Usuário</h2>
                <form action="#" class="p-2" id="formCadastro">
                    <div class="form-group">
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control border border-dark" placeholder="Nome completo" required minlength="5">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomeUsuário" id="nomeUsuário" class="form-control border border-dark" placeholder="Nome de Usuário" required minlength="5">
                    </div>
                    <div class="form-group">
                        <input type="email" name="emailUsuário" id="emailUsuário" class="form-control border border-dark" placeholder="E-mail de Usuário" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaUsuário" id="senhaUsuário" class="form-control border border-dark" placeholder="Digite sua senha" required minlength="6">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaConfirma" id="senhaConfirma" class="form-control border border-dark" placeholder="Confirme a sua senha" required minlength="6">
                    </div>
                    <div class="form-group mt-5">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                            <label for="concordar" class="custom-control-label">
                                Eu concordo com os
                                <a href="#"> termos e condições.</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="login.php" class="btn btn-primary btn-block" role="button" aria-pressed="true">Cadastrar</a>
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                            Já cadastrado?
                            <a href="login.php" id="btnJáCadastrado">
                                Entrar aqui.
                            </a>
                        </p>
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