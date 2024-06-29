<?php 

	require_once("vendaController.php");
    require_once("CONTROLLER/usuarioController.php");
    require_once("CONTROLLER/veiculoController.php");
	require_once("nav.php");

?>

<title>CHECKOUT | ArglaMotors</title>

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
                        <h2>CHECKOUT</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html"><i class="fa fa-home"></i> Início</a>
                            <a href="carT.php">Meu Carrinho</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

		<div class="untree_co-section">
		    <div class="container">
		      
		      <div class="row">
		        <div class="col">
		          <h2 class="h3 mb-3 text-black">Detalhes da Compra</h2>
		        <form class="login_form" action="vendaController.php" method="POST" id="contactForm" novalidate="novalidate">
		        <div class="p-3 p-lg-5 border bg-white">
		            <div class="form-group row">
		              <div class="col-md-6">
		                <label for="c_fname" class="text-black">Nome Completo <span class="text-danger">*</span></label>
		                <input type="text" placeholder="Escreva seu nome completo" class="form-control" name="nome" required>
		              </div>
		              <div class="col-md-6">
		                <label for="c_lname" class="text-black">Telefone <span class="text-danger">*</span></label>
		                <input type="text" type="tel" maxlength="15" onkeyup="handlePhone(event)" placeholder="(xx) 9.xxxx-xxxx" class="form-control" name="telefone" required>
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-6">
		                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" name="email" value="<?=$email?>" required readonly>

		              </div>
		              <?php 
	                      $msg = isset($_GET['msg'])?$_GET['msg']:"";
	                      if($msg == "naoexiste"){
	                        echo("
	                            <script type='text/javascript'>
	                                alert('Email Inválido!');             
	                            </script>
	                        "); }
	                    ?> 
		            </div>


		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Endereço <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" name="endereco" placeholder="Escreva seu Endereço completo" required>
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col">
		                
		                <?php
                            $veiculoSelecionados = '';
                            if (isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho'])) {
	                            foreach ($_SESSION['carrinho'] as $p) {
	                                $item = $veiculoDAO->carregar($p);
	                                if (is_array($item) && isset($item['modelo'])) {
	                                    $veiculoSelecionados .= htmlspecialchars($item['modelo']) . ', ';
	                                }
	                            }
                        	}
                        
                            $veiculoSelecionados = rtrim($veiculoSelecionados, ', ');
                            ?>
		                <input type="hidden" class="form-control" name="veiculosComprados" value="<?= $veiculoSelecionados ?>" readonly>
		              </div>
		              
		            </div>
		            <div class="col-md-6">
		                <button class="site-btn" type="submit" value="adicionar" name="acao" style="margin-top: 10px">Comprar</button>
		              </div>

		       	</div>

		        </form>
		        <?php 
                  $msg = isset($_GET['msg'])?$_GET['msg']:"";
                  if($msg == "comprado"){
                    echo("
                        <script type='text/javascript'>
                            alert('Compra realizada com sucesso! Obrigado pela preferência!');             
                        </script>
                    "); }
                ?>
		    </div>


		        <div class="col">  

		          <div class="row mb-5" style="margin-top: 20px;">
		            <div class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Your Order</h2>
		              <div class="p-3 p-lg-5 border bg-white" style="padding-bottom: 100px !important;">
		                <table class="table site-block-order-table mb-5">
		                  <thead>
		                    <th>Produto</th>
		                    <th>Total</th>
		                  </thead>
		                  <tbody>
		                  	<?php 
		                        $total = 0;
		                        $quantidade = 1; 
		                    if (isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho'])) {
		                        foreach($_SESSION['carrinho'] as $p){
		                            $item = $veiculoDAO->carregar($p);
		                            
		                           
		                            if(is_array($item) && isset($item['preco'])) {
		                    ?>  
		                    <tr>
		                      <td><?=$item['marca']?><strong class="mx-2">x</strong><?=$quantidade?></td>
		                      <td>R$<?=$item['preco'] * $quantidade?>.00</td>
		                    </tr>
		                    <?php 
                               
		                               $total += floatval($item['preco']);
		                           } 
		                           
		                       }   
		                    }      
		                   ?>

		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Valor Total</strong></td>
		                      <td class="text-black font-weight-bold"><strong>R$<?=$total?>.00</strong></td>
		                    </tr>

		                   
		                  </tbody>
		                    	
		                </table>
		                <div style="float: right;">
			                <a href="car.php"><span class="primary-btn" style="text-align: center;">Continue Comprando</span></a>
			            </div>
		                

		              </div>
		            </div>
		          </div>

		        </div>
		      </div>
		      <!-- </form> -->
		    </div>
		  </div>


<script type="text/javascript">
  const handlePhone = (event) => {
    let input = event.target;
    input.value = phoneMask(input.value);
  }

  const phoneMask = (value) => {
    if (!value) return "";
    value = value.replace(/\D/g,'');
    value = value.replace(/(\d{2})(\d)/,"($1) $2");
    value = value.replace(/(\d)(\d{4})$/,"$1-$2");
    return value;
  }
</script>


		<script src="ASSETS/js/bootstrap.min.js"></script>
		<script src="ASSETS/js/tiny-slider.js"></script>
		<script src="ASSETS/js/custom.js"></script>

<?php 
		require_once("rodape.php");
?> 