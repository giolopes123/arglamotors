<?php 

    require_once("CONTROLLER/usuarioController.php");
    require_once("CONTROLLER/veiculoController.php");
    require_once("nav.php");

?>

		<title>MEU CARRINHO | ArglaMotors</title>

		<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

		<link href="ASSETS/css/tiny-slider.css" rel="stylesheet">
		<link href="ASSETS/css/style cart.css" rel="stylesheet">


		<!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="ASSETS/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>MEU CARRINHO</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html"><i class="fa fa-home"></i> Início</a>
                            <a href="car.php">Shopping</a>
                            <span>Meu Carrinho</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Foto</th>
                          <th class="product-name">Modelo</th>
                          <th class="product-price">Preço</th>
                          <th class="product-quantity">Quantidade</th>
                          <th class="product-total">Total</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                          $total = 0;
                          $quantidade = 0;

                          if (isset($_SESSION['carrinho'])) {
                                   $produtos_no_carrinho = array(); 

                          
                              foreach ($_SESSION['carrinho'] as $produto_id) {
                                  if (isset($produtos_no_carrinho[$produto_id])) {
                                      $produtos_no_carrinho[$produto_id]++;
                                  } else {
                                      $produtos_no_carrinho[$produto_id] = 1;
                                  }
                              }

                              foreach ($produtos_no_carrinho as $produto_id => $quantidade) {
                                  // Carrega o produto pelo ID
                                  $item = $veiculoDAO->carregar($produto_id);

                                  // Verifica se o produto foi carregado corretamente
                                  if (is_array($item) && isset($item['preco'])) {
                                                  
                          ?>


                        <tr>
                          <!--<td class="product-remove"><a href="#" class="remove" onclick="removeProduto('<?=$item['cod']?>')"><span class="ion-ios-close">REMOVER</span></a></td>-->
                          <td class="product-thumbnail">
                            <img src="UPLOADS/VEICULOS/<?=$item['foto']?>" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black"><?=$item['modelo']?></h2>
                          </td>
                          <td>R$<?=$item['preco']?></td>
                          <div class="input-group mb-3">
                              <td class="price">
                                  <?=$quantidade?><button type="button" class="btn btn-light btn-circle btn-sm" name="acao" value="add" >+</button>
                               </td>
                          </div>
                          <td>R$<?=$item['preco'] * $quantidade?>.00</td>
                          <!--<td><a href="#" style="color: black !important;" ><span href="#" class="remove">X</span></a></td>-->
                          <td><a href="" style="color: black;"><i class="material-icons" data-toggle="tooltip" title="Excluir" onclick="removeProduto(<?=$item['cod']?>)">&#xE872;</i></a></td>
                        </tr>

                        <?php 
 
                                   $total += floatval($item['preco'] * $quantidade);
                                                    
                                    }
                                }
                            }
                        ?>
                        
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
              <div class="row" style="margin-top: -50px; margin-right: -100px;">
              <div class="col-lg-9"></div>
              
              <div class="col-lg-3" style="margin-bottom: -90px; margin-top: 50px;">
                <a href="checkout.php"><span class="primary-btn" style="text-align: center;">Finalizar Compra</span></a>
              </div>
              <div class="col-lg-3" style="margin-bottom: -90px; margin-top: 50px;">
                <a href="car.php"><span class="primary-btn" style="text-align: center;">Continue Comprando</span></a>
              </div>
              </div>
        
              <div class="row" style="margin-top: 150px; margin-bottom: 100px;">
                  <div class="col-md-5 pl-5">
                    
      
                    <div class="row">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="row">
                
            </div>
		

<?php require_once("rodape.php"); ?>
<script src="SCRIPT/scriptVeiculo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

