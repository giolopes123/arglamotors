<?php 
    require_once("CONTROLLER/usuarioController.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="ASSETS/img/logo png.png" rel="icon">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ASSETS/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="ASSETS/css/teste.css" type="text/css">

    <title>CADASTRO | ArglaMotors</title>

    <style type="text/css">
        body {
            background-color: black !important;
        }
        p {
            color: white;
        }
        .box-area {
            width: 930px;
        }
        .right-box {
            padding: 40px 30px 40px 40px;
        }
        ::placeholder {
            font-size: 16px;
        }
        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }
            .left-box {
                height: 100px;
                overflow: hidden;
            }
            .right-box {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="hero spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero__text">
                        <div class="hero__text__title" style="margin-top: -120px !important;" align="center">
                            <img src="ASSETS/img/logo capa.png" width="350px" height="350px" style="border-radius: 50%;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Cliente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Administrador</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h4 style="margin-bottom: 10px; font-weight: bold;">Cadastrar-se como cliente:</h4>
                                    <form method="POST" id="formCliente" enctype="multipart/form-data">
                                        <!-- Campos do formulário -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nome:</span>
                                            </div>
                                            <input type="text" class="form-control" required placeholder="Digite seu nome" name="nome_cliente">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Email:</span>
                                            </div>
                                            <input type="email" class="form-control" required placeholder="exemplo@gmail.com" name="email">
                                        </div>
                                        <?php 
                                          $msg = isset($_GET['msg'])?$_GET['msg']:"";
                                          if($msg == "jaexisteU"){
                                            echo("
                                                <div class='alert alert-danger mt-3' role='alert' id='alertas'>
                                                        Esse email já está cadastrado!
                                                </div>
                                                <script type='text/javascript'>
                                                    window.onload = function() { document.getElementById('alertas').style.display = 'block';
                                                    };          
                                                </script>
                                                     ");
                                            echo("<script>
                                                setTimeout(() => {
                                                document.getElementById('alertas').style.display = 'none';
                                                 }, 2000);
                                                </script>"); }
                                        ?>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Senha:</span>
                                            </div>
                                            <input type="password" class="form-control" required placeholder="Digite sua senha" name="senha">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Endereço:</span>
                                            </div>
                                            <textarea class="form-control" required name="endereco"></textarea>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">CPF:</span>
                                            </div>
                                            <input type="text" class="form-control cpf_cliente" required placeholder="xxx.xxx.xxx-xx" name="cpf_cliente" autocomplete="off" maxlength="14">
                                        </div>
                                        <div class='alert alert-danger mt-3 alerta_cliente' role='alert'>
                                            O CPF precisa conter 11 dígitos!
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">RG:</span>
                                            </div>
                                            <input type="number" class="form-control" required placeholder="Digite seu RG" name="rg">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Estado Civil:</span>
                                            </div>
                                            <input type="text" class="form-control" required placeholder="Informe seu estado civil" name="estado_civil">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nome do Conjuge:</span>
                                            </div>
                                            <input type="text" class="form-control" name="nome_conjuge" placeholder="Digite o nome de seu conjuge">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">CPF do Conjuge:</span>
                                            </div>
                                            <input type="text" class="form-control cpf_conjuge" name="cpf_conjuge" placeholder="xxx.xxx.xxx-xx" autocomplete="off" maxlength="14">
                                        </div>
                                        <div class='alert alert-danger mt-3 alerta_conjuge' role='alert'>
                                            O CPF precisa conter 11 dígitos!
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Telefone:</span>
                                            </div>
                                            <input type="text" class="form-control telefone_cliente" required placeholder="Digite seu telefone" name="telefone" maxlength="14">
                                        </div>
                                        <div class='alert alert-danger mt-3 alerta_telefone' role='alert'>
                                            O telefone precisa conter 11 dígitos!
                                        </div>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Foto:</span>
                                          </div>
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" required id="inputGroupFileA" name="foto">
                                              <label class="custom-file-label" for="inputGroupFileA">Escolha uma foto</label>
                                          </div> 
                                        </div>
                                        <button type="submit" class="btn btn-primary" value="AddU" name="acao">Cadastrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-PLoL9j5NbOSpTj4dNSKB5YBILqOezT5W7hVgpYsCmK6Er/fJTH61mdf3y4oBiN2N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="ASSETS/js/jquery.nice-select.min.js"></script>
    <script src="ASSETS/js/jquery-ui.min.js"></script>
    <script src="ASSETS/js/jquery.magnific-popup.min.js"></script>
    <script src="ASSETS/js/mixitup.min.js"></script>
    <script src="ASSETS/js/owl.carousel.min.js"></script>
    <script src="ASSETS/js/main.js"></script>

    <!-- Custom Script for Validation -->
    <script>
        $(document).ready(function() {
            // Mask input fields
            $('.cpf_cliente, .cpf_conjuge').mask('000.000.000-00');
            $('.telefone_cliente').mask('(00)00000-0000');

            // Hide alert messages initially
            $('.alerta_cliente, .alerta_conjuge, .alerta_telefone').hide();

            // Form submission event
            $('#formCliente').on('submit', function(event) {
                let cpfCliente = $('.cpf_cliente').val().replace(/\D/g, '');
                let cpfConjuge = $('.cpf_conjuge').val().replace(/\D/g, '');
                let telefoneCliente = $('.telefone_cliente').val().replace(/\D/g, '');

                // Validate CPF Cliente
                if (cpfCliente.length !== 11) {
                    event.preventDefault();
                    $('.alerta_cliente').show();
                    setTimeout(() => {
                        $('.alerta_cliente').fadeOut();
                    }, 3000);
                }

                // Validate CPF Conjuge if provided
                if (cpfConjuge.length > 0 && cpfConjuge.length !== 11) {
                    event.preventDefault();
                    $('.alerta_conjuge').show();
                    setTimeout(() => {
                        $('.alerta_conjuge').fadeOut();
                    }, 3000);
                }

                // Validate Telefone Cliente
                if (telefoneCliente.length !== 11) {
                    event.preventDefault();
                    $('.alerta_telefone').show();
                    setTimeout(() => {
                        $('.alerta_telefone').fadeOut();
                    }, 3000);
                }
            });
        });
    </script>
</body>
</html>
