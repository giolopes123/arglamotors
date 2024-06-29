<?php 

    require_once("CONTROLLER/usuarioController.php");
    require_once("nav.php");

?>


    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?=$nome?></h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Car Listing</a>
                            <span>Porsche cayenne turbo s</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Details Section Begin -->
    <section class="car-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <?php  
                       if (isset($_GET['cod']) && isset($_GET['modelo']) && isset($_GET['preco']) && isset($_GET['descricao']) && isset($_GET['marca']) && isset($_GET['foto'])) {
                        $cod = $_GET['cod'];
                        $nome = $_GET['modelo'];
                        $valor = $_GET['preco'];
                        $descricao = $_GET['descricao'];
                        $tipo = $_GET['marca'];
                        $foto = $_GET['foto'];
                                        
                        }
                        else{
                             header("location:car.php");
                        }
                    ?>
                        <div class="car__details__pic">
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src="img/cars/details/cd-1.jpg" alt="">
                        </div>
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                <div class="ct" data-imgbigurl="ASSETS/img/cars/details/cd-2.jpg"><img
                                        src="ASSETS/img/cars/details/sm-1.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="ASSETS/img/cars/details/cd-3.jpg"><img
                                        src="ASSETS/img/cars/details/sm-2.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="ASSETS/img/cars/details/cd-4.jpg"><img
                                        src="ASSETS/img/cars/details/sm-3.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="ASSETS/img/cars/details/cd-5.jpg"><img
                                        src="ASSETS/img/cars/details/sm-4.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="ASSETS/img/cars/details/cd-6.jpg"><img
                                        src="ASSETS/img/cars/details/sm-5.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Vehicle
                                    Overview</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="car__details__sidebar">
                        <div class="car__details__sidebar__model">
                            <ul>
                                <li>Stock <span>K99D10459934</span></li>
                                <li>Vin <span>3VWKM245686</span></li>
                            </ul>
                            <a href="#" class="primary-btn">Get Today Is Price</a>
                            <p>Pricing in 11/26/2019</p>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <li>MSRP <span>$120,000</span></li>
                                <li>Dealer Discounts <span>$3,000</span></li>
                                <li>Price <span>$117,000</span></li>
                            </ul>
                            <a href="#" class="primary-btn"><i class="fa fa-credit-card"></i> Express Purchase</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-sliders"></i> Build Payment</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-money"></i> Value Trade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Details Section End -->

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
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>