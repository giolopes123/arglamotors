<?php
function is_active($page) {
    return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>

<?php 
    require_once("CONTROLLER/usuarioController.php");
ob_start(); // Inicia o buffer de saída
session_start();
    
    if (isset($_SESSION['tipo']) && isset($_SESSION['login'])) {
        $tipo = $_SESSION['tipo'];
        $login = $_SESSION['login'];

        if ($tipo == "corretor") {
            if (!isset($_SESSION['corretor'])) {
                header("location:index.php");
                exit();
            }
            $cod = $login['cod'] ?? '';
            $nome_corretor = $login['nome_corretor'] ?? '';
            $endereco = $login['endereco'] ?? '';
            $email = $login['email'] ?? '';
            $dt_admissao = $login['dt_admissao'] ?? '';
            $cpf_corretor = $login['cpf_corretor'] ?? '';
            $n_matricula = $login['n_matricula'] ?? '';
            $rg = $login['rg'] ?? '';
            $telefone = $login['telefone'] ?? '';
            $foto = $login['foto'] ?? '';
            $senha = $login['senha'] ?? '';
        } elseif ($tipo == "cliente") {
            if (!isset($_SESSION['cliente'])) {
                header("location:index.php");
                exit();
            }
            $cod = $login['cod'] ?? '';
            $nome_cliente = $login['nome_cliente'] ?? '';
            $endereco = $login['endereco'] ?? '';
            $email = $login['email'] ?? '';
            $cpf_conjuge = $login['cpf_conjuge'] ?? '';
            $cpf_cliente = $login['cpf_cliente'] ?? '';
            $foto = $login['foto'] ?? '';
            $nome_conjuge = $login['nome_conjuge'] ?? '';
            $estado_civil = $login['estado_civil'] ?? '';
            $rg = $login['rg'] ?? '';
            $telefone = $login['telefone'] ?? '';
            $senha = $login['senha'] ?? '';
        } else {
            echo("Tipo Indefinido!");
            exit();
        }
    } else {
        header("location:index.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="ASSETS/img/haha.png" rel="icon">
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



    <style type="text/css">
        .selector-for-some-widget {
          box-sizing: content-box;
        }
        .ta{
            color: white !important;
        }
    </style>
    
</head>

<body>

        <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        
        <div class="offcanvas__logo">
            <a href="index.php"><img src="ASSETS/img/ARGLAMOTORS (1).png" alt="" style="margin-bottom: 10px"></a>

            <ul>
            <?php if ($_SESSION['tipo'] == "cliente") : ?>
                <a href="#"><img src="UPLOADS/CLIENTES/<?php echo($foto)?>" alt="" class="img-fluid rounded-circle" style="height: 200px; width: 200px;"></a>
            <?php endif; ?>
            <?php if ($_SESSION['tipo'] == "corretor") { ?>  
                <a href="#"><img src="UPLOADS/CORRETORES/<?php echo($_SESSION['login']['foto'])?>" alt="" class="img-fluid rounded-circle" style="height: 200px; width: 200px;"></a>  
            <?php  }  ?>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add" >
            <li class=""><i class="fa fa-clock-o"></i> Aberto das 08:00 às 18:00</li>
            <a href="mailto:arglamotors@gmail.com?subject=FEEDBACK%20SOBRE%20O%20PRODUTO">
                <li class=""><i class="fa fa-envelope-o"></i> arglamotors@gmail.com</li>
            </a>
        </ul>
        <div class="offcanvas__phone__num">
            <a href="https://abre.ai/zapgigi">
                <i class="fa fa-phone"></i>
                <span>+55 (88) 9.8124-1291</span>
            </a>
        </div>
        <div class="offcanvas__social">
            <a href="mailto:arglamotors@gmail.com?subject=FEEDBACK%20SOBRE%20O%20PRODUTO"><i class="fa fa-envelope-o"></i></a>
            <a href="https://abre.ai/zapgigi"><i class="fa fa-whatsapp"></i></a>
            <a href="https://instagram.com/arglamotors"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
    
    <header class="header">
        <div class="header__top" style="background-color: #2e2e2e !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7" >
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Aberto das 08:00 às 18:00</li>
                            <a href="mailto:arglamotors@gmail.com?subject=FEEDBACK%20SOBRE%20O%20PRODUTO">
                                <li><i class="fa fa-envelope-o"></i> arglamotors@gmail.com</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <a href="https://abre.ai/zapgigi">
                                    <i class="fa fa-phone"></i>
                                    <span> +55 (88) 9.8124-1291</span>
                                </a>
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
                        <a href="index.php"><img src="ASSETS/img/ARGLAMOTORS (1).png" width="200" style="margin-top: 10px"></a>
                    </div>
                </div>
                <div class="col-9" >
                    <div class="header__nav" >
                        <nav class="header__menu">
                            <ul >
                                <li class="<?= is_active('index.php') ?>"><a href="index.php">Início</a></li>
                                <?php if ($_SESSION['tipo'] == "corretor") : ?>
                                    <li>
                                        <a href="#">Views</a>
                                        <ul class="dropdown">
                                            <li class="<?= is_active('clienteView.php') ?>"><a href="clienteView.php">Clientes</a></li>
                                            <li class="<?= is_active('corretorView.php') ?>"><a href="corretorView.php">Corretores</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?= is_active('veiculoView.php') ?>"><a href="veiculoView.php">Veículos</a></li>
                                <?php endif; ?>
                                <?php if ($_SESSION['tipo'] == "cliente") : ?>
                                    <li class="<?= is_active('car.php') ?>"><a href="car.php">Veículos</a></li>
                                    <li class="<?= is_active('blog.php') ?>"><a href="blog.php">Blog</a></li>
                                <?php endif; ?>
                                
                                <!--<li>
                                    <a href="#">Posts</a>
                                    <ul class="dropdown">
                                        <li class="<?= is_active('about.php') ?>"><a href="about.php">Sobre a AG</a></li>
                                        <li class="<?= is_active('car-details.php') ?>"><a href="car-details.php">Detalhes dos Carros</a></li>
                                        <li class="<?= is_active('blog-details.php') ?>"><a href="blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>-->

                                <?php if ($_SESSION['tipo'] == "cliente") : ?>
                                <li class="<?= is_active('about.php') ?>"><a href="about.php">Sobre Nós</a></li>
                                <li class="<?= is_active('contact.php') ?>"><a href="contact.php">Contato</a></li>
                                
                                <?php endif; ?>
                                <?php if ($_SESSION['tipo'] == "cliente") : ?>
                                    <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                    <li>
                                    <a href="#"><img src="UPLOADS/CLIENTES/<?php echo($foto)?>" alt="" class="img-fluid rounded-circle" style="height: 50px; width: 50px;"></a>
                                    <ul class="dropdown">
                                        <li class="<?= is_active('perfil.php') ?> drop"><a href="perfil.php">Sobre Mim</a></li>
                                        <li><a href="logout.php">Sair</a></li>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                <?php if ($_SESSION['tipo'] == "corretor") { ?>  
                                    <li>
                                    <a href="#"><img src="UPLOADS/CORRETORES/<?php echo($_SESSION['login']['foto'])?>" alt="" class="img-fluid rounded-circle" style="height: 50px; width: 50px;"></a>
                                    <ul class="dropdown">
                                        <li class="<?= is_active('perfil.php') ?>"><a href="perfil.php">Sobre Mim</a></li>
                                        <li><a href="logout.php">Sair</a></li>
                                    </ul>
                                    </li>      
                                <?php  }  ?>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>