<?php 

    require_once("CONTROLLER/usuarioController.php");
    require_once("CONTROLLER/veículoController.php");
    require_once("nav.php");

?>

<title>MEU CARRINHO | ArglaMotors</title>

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
 

   
    <tbody>
      <tr class="text-center">
        <td class="product-remove"><a href="#" class="remove" onclick="removeProduto('<?=$item['cod']?>')"><span class="ion-ios-close">REMOVER</span></a></td>
        
        <td class="image-prod"><div class="img" style="background-image:url('UPLOADS/VEÍCULOS/<?=$item['foto']?>');"></div></td>
        
        <td class="product-name">
            <h3><?=$item['modelo']?></h3>
            <p><?=$item['marca']?></p>
        </td>
        
        <td class="price">R$<?=$item['preco']?></td>
                
        <div class="input-group mb-3">
            <td class="price">
                <?=$quantidade?><button type="button" class="btn btn-light btn-circle btn-sm" name="acao" value="add" >+</button>
             </td>
        </div>
       
        <td class="total">R$<?=$item['preco'] * $quantidade?></td>

 </tr>

    <?php 
 
               $total += floatval($item['preco'] * $quantidade);
                                
                }
            }
        }
    ?>


    <!-- Car Details Section End -->

    <!-- Footer Section Begin -->
    <?php
        include("rodape.php");
    ?>
    <!-- Footer Section End -->
<script src="SCRIPT/scriptVeículo.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
     crossorigin="anonymous"></script>
