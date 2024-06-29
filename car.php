<?php 
    
    require_once("CONTROLLER/usuarioController.php");
    require_once("CONTROLLER/veiculoController.php");
    require_once("nav.php");

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }
    //include("include_dao.php");
    //$veiculoDAO = new VeiculoDAO();
    //$veiculos = $veiculoDAO->listarTodos();

?>
    <title>VEÍCULOS | ArglaMotors</title>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    
    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="ASSETS/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html"><i class="fa fa-home"></i> Início</a>
                            <span>Sobre</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    
                </div>
                <div class="col-lg-10">
                    <div class="car__filter__option">
                        <div class="row">
                            <form method="GET" class="col-12 mb-2">
                                <div class="input-group">
                                    <input class="form-control py-2" type="search" name="pesquisa" placeholder="Pesquisar pela marca" value="" id="example-search-input">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" name="acao" value="Pesquisar">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($veiculos as $veiculo){ ?>
                        <a href="car-details.php"><div class="col-lg-4 col-md-4" style="margin-bottom: 100px;">
                            <a href="javascript:void(0);" onclick="mostraritem('<?=$veiculo['cod']?>','<?=$veiculo['modelo']?>', '<?=$veiculo['preco']?>'  , '<?=$veiculo['descricao']?>' ,'<?=$veiculo['marca']?>' ,'<?=$veiculo['foto']?>' )" class="img-prod" ><div class="car__item" style="margin-top:;width: 300px; height: 300px;">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="UPLOADS/VEICULOS/<?=$veiculo['foto']?>" alt="">
                                    <!--<img src="ASSETS/img/cars/car-8.jpg" alt="">
                                    <img src="ASSETS/img/cars/car-6.jpg" alt="">
                                    <img src="ASSETS/img/cars/car-3.jpg" alt="">-->
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date"><?=$veiculo['ano_de_fabricacao']?></div>
                                        
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
                            </div></a>
                        </div></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Footer Section Begin -->
    <?php
        include("rodape.php");
    ?>
    <!-- Footer Section End -->
    <script src="SCRIPT/scriptVeiculo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
     crossorigin="anonymous"></script>

     <script type="text/javascript">
         function mostraritem(cod, modelo, valor, descricao, marca, foto) {
    const params = new URLSearchParams();
    params.append('cod', cod);
    params.append('modelo', modelo);
    params.append('preco', preco);
    params.append('descricao', descricao);
    params.append('marca', marca);
    params.append('foto', foto);

    window.location.href = 'car-details.php?' + params.toString();
}

     </script>

