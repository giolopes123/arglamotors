<?php 
    require_once("CONTROLLER/usuarioController.php");
    require_once("nav.php");
?>
<script src="SCRIPT/scriptCliente.js"></script>
<div class="tab-pane active" id="tabs-1" role="tabpanel">
    <div class="hero__tab__form">
        <h4 style="margin-bottom: 10px; font-weight: bold;">Redefinir Senha</h4>
        <form method="POST">
            <div class="input-group mb-3">
              <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="cliente@argla.com" name="email">
             </div>
            

            <?php 
              $msg = isset($_GET['msg'])?$_GET['msg']:"";
              If($msg == "erro"){
                echo("
                    <div class='alert alert-danger mt-3' role='alert' id='alertas2'>
                            Email incorreto!
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
                else if ($msg=="encontrado") {
                    echo('
                    <div class="input-group mb-1" id="inserirSenha">
                      <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Digite sua senha" name="senha">
                    </div>
                    <script type="text/javascript">
                        window.onload = function() { document.getElementById("inserirSenha").style.display = "block";
                        };          
                    </script>
                         ');
               
                }
            ?>

            <button type="submit" class="site-btn" style="margin-top: 10px" value="VerificarEmailU" name="acao">Verificar Email</button>

        </form>
    </div>
</div>