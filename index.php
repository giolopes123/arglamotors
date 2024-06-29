<?php 

    require_once("CONTROLLER/usuarioController.php");
    require_once("CONTROLLER/veiculoController.php");
    require_once("nav.php");

?>

<title>INÍCIO | ArglaMotors</title>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <?php 
        $msg = isset($_GET['msg'])?$_GET['msg']:"";
        if ($msg=="logado") {
            echo("<script>alert('Logado com sucesso!');</script>");
        }
    ?>
    
    <!-- Hero Section Begin -->
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
    <section class="services spad">
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
    <section class="feature spad" id="services">
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
                               <a href="" onclick="adicionarProduto('<?=$veiculo['cod']?>')" style="background-size: 100%;"><span class="car-option" style="display: block !important; width: 100% !important; text-align: center !important;">Adicionar ao carrinho</span></a> 
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
                        <a href="about.php" class="primary-btn">Sobre nós</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="ASSETS/img/chooseus-video.png" alt="">
            <a href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
    
    </section>
    <!-- Latest Blog Section End -->

    <!-- Cta Begin -->
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="ASSETS/img/cta/cta-1.jpg">
                        <h4>Você quer comprar um carro?</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="ASSETS/img/cta/cta-2.jpg">
                        <h4>Você quer alugar um carro?</h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->

    <!-- Footer Section Begin -->
    <?php
        include("rodape.php");
    ?>
    <!-- Footer Section End -->
