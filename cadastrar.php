<?php
	require_once("CONTROLLER/usuarioController.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- informações padrões -->

  <title>Página de login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- estilo -->

  <style type="text/css">
    body{
      background-image: url(https://cdn.motor1.com/images/mgl/lEmjGg/s4/chevrolet-tracker-rs-2024.webp);
      background-size: cover;
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

</style>
</head>
<body>
<form method="POST">
  <!-- -------------  DIV Principal  ------------>
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      
  <!-- -------------  DIV Login  ------------>
      
      <div class="row border rounded-5 p-3 bg-white shadow box-area">

  <!-- ----------  Caixa da esquerda  ------------>

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" >
          <div class="featured-image mb-3">
            <img src="logo test.jpeg" class="img-fluid" style="width: 500px; background-size:cover;"> 
          </div>
        </div>

  <!-- -----------  Caixa da direita  ------------>
        
        <div class="col-md-6 right-box">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <p>Insira suas informações para cadastrar-se:</p>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="@exemplo123" name="email">
            </div>
            
            <div class="input-group mb-1">
              <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="********" name="senha">
            </div>

            <div class="input-group mt-2">
              <select class="form-select" name="tipo" id="tipo">
                <option selected value="Cliente">Cliente</option>
                <option value="Corretor">Corretor</option>
              </select>
            </div>

            
              <div class="alert alert-danger mt-3" role="alert" id="alertas">
                Login e/ou Senha incorretos!
              </div>
          

            <div class="input-group mb-5 d-flex justify-content-between">
            </div>
            <div class="input-group mb-3">
              <input type="submit" name="acao" class="btn btn-lg w-100 fs-6" style="background: #CD1818; color: white;" value="Entrar">
            </div>
            <div class="row">
              <small class="text-center">Não possui uma conta? <a href="#">Cadastre-se</a></small>
            </div>
          </div>
        </div>

      </div> <!-- fecha div login -->

    </div> <!-- fecha div container -->
</form>

</body>

<script type="text/javascript">
  document.getElementById("alertas").style.display = "none";
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
