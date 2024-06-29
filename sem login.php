<?php
function is_active($page) {
    return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

require_once("CONTROLLER/usuarioController.php");
require_once("CONTROLLER/veiculoController.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

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

    <!-- Css Styles -->
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

<!-- estilo -->
<script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
  $('#myModal').modal(options)
})
</script>


<title>INÍCIO | ArglaMotors</title>
</head>
<body>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="ASSETS/img/ARGLAMOTORS (1).png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Horário de Funcionamento: 08:00 às 18:00</li>
            <li><i class="fa fa-envelope-o"></i> arglamotors@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>+55 (88) 9.8124-1291</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>

    <!-- Offcanvas Menu End -->
    
    <header class="header">
        <div class="header__top">
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Horário de Funcionamento: 08:00 às 18:00</li>
                            <li><i class="fa fa-envelope-o"></i> arglamotors@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span> +55 (88) 9.8124-1291</span>
                            </div>
                            <div class="header__top__social">
                                <a href="mailto:arglamotors@gmail.com?subject=FEEDBACK%20SOBRE%20O%20PRODUTO"><i class="fa fa-envelope-o"></i></a>
                                <a href="https://abre.ai/zapgigi"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://instagram.com/arglamotors"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div class="header__logo">
                        <a href="#inicio1"><img src="ASSETS/img/ARGLAMOTORS (1).png" alt="Logo Marca" width="200" style="margin-top: -10px"></a>
                        <a class="nav-link" href="#"><img src="ASSETS/img/user.svg"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li ><a class="nav-link" href="#inicio1">Início</a></li>
                                    <li><a class="nav-link" href="#services">Serviços</a></li>
                                
                                
                                <li>
                                    <a href="#"><i class="fa fa-user"></i></a>
                                    <ul class="dropdown" id="drop">
                                        <li class="drop"><a href="#login">Logar</a></li>
                                        <li><a href="logout.php">Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
<title>INÍCIO | ArglaMotors</title>
    <!-- Page Preloder -->




    <!-- Header Section Begin -->
    
<section class="hero spad set-bg" data-setbg="ASSETS/img/show.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>ENCONTRE O SEU CARRO DOS SONHOS</span>
                            <h2>Porsche Cayenne S</h2>
                        </div>
                        <div class="hero__text__price">
                            <div class="car-model">Modelo 2019</div>
                            <h2>$399<span>/Mês</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nossos serviços</span>
                        <h2>O que oferecemos?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="ASSETS/img/services/services-1.png" alt="">
                        <h5>Aluguel de veículos</h5>
                        <p>Locação de veículos com opções flexíveis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="ASSETS/img/services/services-2.png" alt="">
                        <h5>Compra de veículos</h5>
                        <p>Venda de veículos novos e seminovos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="ASSETS/img/services/services-3.png" alt="">
                        <h5>Manutenção</h5>
                        <p>Manteremos seu veículo em ótimo estado.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="ASSETS/img/services/services-4.png" alt="">
                        <h5>Suporte 24/7</h5>
                        <p>Atendimento ao cliente a qualquer hora</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Nossos recursos</span>
                            <h2>Somos um nome confiável no setor automotivo</h2>
                        </div>
                        <div class="feature__text__desc">
                            <p>Na Arglamotors, a confiança é a nossa marca registrada.

                            <br>
                            <br>

                             Com anos de experiência no setor automotivo, construímos uma reputação sólida baseada em transparência e compromisso. 

                            <br>
                            <br>
                            <br>

                            Nosso objetivo é oferecer a você não apenas veículos de qualidade, mas também um serviço excepcional que supera suas expectativas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="ASSETS/img/feature/feature-1.png" alt="">
                                </div>
                                <h6>Motor</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="ASSETS/img/feature/feature-2.png" alt="">
                                </div>
                                <h6>Turbo</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="ASSETS/img/feature/feature-3.png" alt="">
                                </div>
                                <h6>Resfriador</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="ASSETS/img/feature/feature-4.png" alt="">
                                </div>
                                <h6>Suspensão</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="ASSETS/img/feature/feature-5.png" alt="">
                                </div>
                                <h6>Bateria</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="ASSETS/img/feature/feature-6.png" alt="">
                                </div>
                                <h6>Freio</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->


    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>Por que as pessoas nos escolhem?</h2>
                        </div>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Veículos de alta qualidade e serviços confiáveis</li>
                            <li><i class="fa fa-check-circle"></i> Equipe dedicada e atenciosa, pronta para ajudar.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Soluções abrangentes, incluindo venda, aluguel e manutenção.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Construímos uma sólida reputação baseada em integridade e satisfação do cliente.</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="ASSETS/img/chooseus-video.png" alt="">
        </div>
    </section>
    <!-- Chooseus Section End -->
            <!-- SESSION LOGIN -->
    <section class="hero spad" style="background-color: black;" id="login">
        <!--set-bg" data-setbg="img/hero-bg.jpg"-->
        <div class="container-xl" style="background-color: rgba(0, 0, 0, 0.5); width: 100%;">
            <div class="row">
                <div class="col-lg-5" align="center">
                    <div class="hero__text">
                        <div class="hero__text__title"  style="margin-top: -100px !important;">
                            <img src="ASSETS/img/logo png.png" width="350px" height="350px">
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
                                    <h4 style="margin-bottom: 10px; font-weight: bold;">Logar como Cliente:</h4>
                                    <form method="POST">
                                        <div class="input-group mb-3">
                                          <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="cliente@argla.com" name="email">
                                         </div>
                                        <div class="input-group mb-1">
                                          <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Digite sua senha" name="senha">
                                        </div>
                                        

                                        <?php 
                                          $msg = isset($_GET['msg'])?$_GET['msg']:"";
                                          If($msg == "erro"){
                                            echo("
                                                <div class='alert alert-danger mt-3' role='alert' id='alertas2'>
                                                        Login e/ou Senha incorretos!
                                                </div>
                                                <script type='text/javascript'>
                                                    window.onload = function() { document.getElementById('alertas2').style.display = 'block';
                                                    };          
                                                </script>
                                                     ");
                                            echo("<script>
                                                setTimeout(() => {
                                                document.getElementById('alertas2').style.display = 'none';
                                                 }, 2000);
                                                </script>"); } 
                                            elseif ($msg=="adicionadoU") {
                                                echo ('<script>alert("Cadastrado com sucesso!")</script>');
                                                    
                                            }
                                        ?>

                                        <button type="submit" class="site-btn" style="margin-top: 10px" value="EntrarU" name="acao">Entrar</button>

                                        <a href="cadastrar-se.php" class="site-btn" style="margin-top: 10px">Criar Conta</a>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h4 style="margin-bottom: 10px; font-weight: bold;">Logar como Administrador:</h4>
                                    <form method="POST">
                                        <div class="input-group mb-3">
                                          <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="admin@argla.com" name="email">
                                         </div>
                                        <div class="input-group mb-1">
                                          <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Digite sua senha" name="senha">
                                        </div>

                                        <?php 
                                          $msg = isset($_GET['msg'])?$_GET['msg']:"";
                                          if($msg == "erro"){
                                            echo("
                                                <div class='alert alert-danger mt-3' role='alert' id='alertas'>
                                                        Login e/ou Senha incorretos!
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
                                            elseif ($msg=="adicionadoA") {
                                                echo ('<script>alert("Cadastrado com sucesso!")</script>');
                                                    
                                            }
                                        ?>
                                        <!--<script>alert("Cadastrado com sucesso!")</script>');-->
                                        <button type="submit" class="site-btn" style="margin-top: 10px" value="EntrarA" name="acao">Entrar</button>
                                        
                                        <a href="cadastrar-se.php" class="site-btn" style="margin-top: 10px">Criar Conta</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM SESSION LOGIN -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nossos Veículos</span>
                        <h2>Melhores ofertas de veículos</h2>
                    </div>
                    <ul class="filter__controls">
                    </ul>
                </div>
            </div>
            <div class="row car-filter">
                <?php
                    $contador = 0; 
                    foreach($veiculos as $veiculo){ 
                        if ($contador < 4) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="UPLOADS/VEICULOS/<?=$veiculo['foto']?>" alt="">
                            <!--<img src="ASSETS/img/cars/car-8.jpg" alt="">
                            <img src="ASSETS/img/cars/car-6.jpg" alt="">
                            <img src="ASSETS/img/cars/car-3.jpg" alt="">-->
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#"><?=$veiculo['modelo']?></a></h5>
                                <ul>
                                    <li>R$ <span><?=$veiculo['preco']?></span></li>
                                    <li><?=$veiculo['marca']?></li>
                                    <li><span><?=$veiculo['quilometragem']?></span> km</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                               <a href="" onclick="aviso()" style="background-size: 100%;"><span class="car-option" style="display: block !important; width: 100% !important; text-align: center !important;">Adicionar ao carrinho</span></a> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                            $contador++;
                        }
                    } 
                ?>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Latest Blog Section Begin -->
   
    <!-- Latest Blog Section End -->


<!-- Footer Section Begin -->
        
       <!-- Footer Section End -->
       <?php require_once("rodape.php"); ?>


       <script src="ASSETS/js/jquery-3.3.1.min.js"></script>
       <script src="ASSETS/js/bootstrap.min.js"></script>
       <script src="ASSETS/js/jquery.nice-select.min.js"></script>
       <script src="ASSETS/js/jquery-ui.min.js"></script>
       <script src="ASSETS/js/jquery.magnific-popup.min.js"></script>
       <script src="ASSETS/js/mixitup.min.js"></script>
       <script src="ASSETS/js/jquery.slicknav.js"></script>
       <script src="ASSETS/js/owl.carousel.min.js"></script>
       <script src="ASSETS/js/main.js"></script>
       <script type="text/javascript">
           function aviso(){
                alert("Você precisa estar logado para adicionar produtos ao carrinho!");
           }
       </script>

</body>

</html>