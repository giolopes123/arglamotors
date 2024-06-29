<?php 
    require_once("CONTROLLER/usuarioController.php")
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- informações padrões -->

  <title>LOGIN | ArglaMotors</title>
  <link href="ASSETS/img/haha.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Css Styles -->
  <link rel="stylesheet" href="ASSETS/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="ASSETS/css/style.css" type="text/css">

<!-- estilo -->

  <style type="text/css">
    body{
        background-color: black;
    }

    p{
      color: white;
    }

    .box-area{
      width: 930px;
    }

    .right-box{
      padding: 40px 30px 40px 40px;
    }

    ::placeholder{
      font-size: 16px;
    }

    @media only screen and (max-width:  768px){
      .box-area{
        margin: 0 10px;
      }
      .left-box{
        height: 100px;
        overflow: hidden;
      }
      .right-box{
        padding: 20px;
      }
    }
    section{
      height: 100%;
    }

    .hero {
    position: relative;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    height: 100vh; /* Full viewport height */
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    /*background: url('img/hero-bg.jpg') no-repeat center center/cover;?*/
    z-index: -1; /* Ensure background is behind other content */
}

</style>
</head>
<body>
  <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="hero spad" style="padding-top: 300px;">
        <!--set-bg" data-setbg="ASSETS/img/hero-bg.jpg"-->
        <div class="container" style="background-color: rgba(0, 0, 0, 0.5); width: 100%; padding-top: 30px;">
            <div class="row">
                <div class="col-lg-5" align="center">
                    <div class="hero__text">
                        <div class="hero__text__title"  style="margin-top: -100px !important;">
                            <img src="ASSETS/img/haha.png" width="350px" height="350px" style="border-radius: 50%;">
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
                                            else if ($msg=="adicionado") {
                                                echo("
                                                <div class='alert alert-success mt-3' role='alert' id='alertas3'>
                                                        <b>Cadastrado</b> com sucesso!
                                                </div>
                                                <script type='text/javascript'>
                                                    window.onload = function() { document.getElementById('alertas3').style.display = 'block';
                                                    };          
                                                </script>
                                                     ");
                                            echo("<script>
                                                setTimeout(() => {
                                                document.getElementById('alertas3').style.display = 'none';
                                                 }, 2000);
                                                </script>");
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
                                          If($msg == "erro"){
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
                                        ?>
                                        
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

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Js Plugins -->
<script src="ASSETS/js/jquery-3.3.1.min.js"></script>
<script src="ASSETS/js/bootstrap.min.js"></script>
<script src="ASSETS/js/jquery.nice-select.min.js"></script>
<script src="ASSETS/js/jquery-ui.min.js"></script>
<script src="ASSETS/js/jquery.magnific-popup.min.js"></script>
<script src="ASSETS/js/mixitup.min.js"></script>
<script src="ASSETS/js/jquery.slicknav.js"></script>
<script src="ASSETS/js/owl.carousel.min.js"></script>
<script src="ASSETS/js/main.js"></script>

</html>

<!-- -------------  DIV Principal  
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      
  -------------  DIV Login  ------------
      
      <div class="row border rounded-5 p-3 bg-white shadow box-area" style="background: black !important;">

 ----------  Caixa da esquerda  -----------

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
          <div class="featured-image mb-3">
            <img src="logo test.jpeg" class="img-fluid" style="border-radius: 50%;"> 
            ///<p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight:600;">Be Verified</p>
            <small class="text-white text-wrap text-center" style="width:17rem; font-family:'Courier New', Courier, monospace;">bla bla bla bla bla bla bla bla bla</small>--///
          </div>
        </div>

  -----------  Caixa da direita  ------------
        
        <div class="col-md-6 right-box">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <p>Olá, usuário!</p>
              <p>Aqui é sua página de login, preencha com seus dados e acesse o nosso sistema.</p>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="@exemplo123" name="login">
            </div>
            <div class="input-group mb-1">
              <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="********" name="senha">
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="forgot">
                <small><a href="#">Esqueceu a senha?</a></small>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="submit" name="entrar" class="btn btn-lg w-100 fs-6" style="background: #CD1818; color: white;" value="Entrar">
            </div>
            <div class="row">
              <small class="text-center">Não possui uma conta? <a href="#">Cadastre-se</a></small>
            </div>
          </div>
        </div>

      </div>  fecha div login -

    </div>  fecha div container -->