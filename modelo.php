<?php 

    require_once("CONTROLLER/usuarioController.php");
    require_once("hvac-master/SESSION/session_tipo.php");
    require_once("hvac-master/nav.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Argla Motors | Página principal</title>
    <link rel="icon" href="https://xampp outro/htdocs/trabalho/logo test.jpeg" sizes="32x32">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="hvac-master/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="hvac-master/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Adicionar carro</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
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

    <!-- Header Section Begin -->
    

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            ashdiuas
        </div>
    </section>


    <!-- Footer Section Begin -->
    <?php
        include("rodape.php");
    ?>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Procure aqui.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="hvac-master/js/jquery-3.3.1.min.js"></script>
    <script src="hvac-master/js/bootstrap.min.js"></script>
    <script src="hvac-master/js/jquery.nice-select.min.js"></script>
    <script src="hvac-master/js/jquery-ui.min.js"></script>
    <script src="hvac-master/js/jquery.magnific-popup.min.js"></script>
    <script src="hvac-master/js/mixitup.min.js"></script>
    <script src="hvac-master/js/jquery.slicknav.js"></script>
    <script src="hvac-master/js/owl.carousel.min.js"></script>
    <script src="hvac-master/js/main.js"></script>
</body>

</html>