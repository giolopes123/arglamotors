<?php 
    require_once("CONTROLLER/usuarioController.php");
    require_once("nav.php");
?>


<title>MEU PERFIL</title>


<style type="text/css">
    	
.card-style1 {
    box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
}
.border-0 {
    border: 0!important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}

section {
    padding: 120px 0;
    overflow: hidden;
    background: #fff;
}
.mb-2-3, .my-2-3 {
    margin-bottom: 2.3rem;
}

.section-title {
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
    position: relative;
    display: inline-block;
}
.text-primary {
    color: #ceaa4d !important;
}
.text-secondary {
    color: #15395A !important;
}
.font-weight-600 {
    font-weight: 600;
}
.display-26 {
    font-size: 1.3rem;
}

@media screen and (min-width: 992px){
    .p-lg-7 {
        padding: 4rem;
    }
}
@media screen and (min-width: 768px){
    .p-md-6 {
        padding: 3.5rem;
    }
}
@media screen and (min-width: 576px){
    .p-sm-2-3 {
        padding: 2.3rem;
    }
}
.p-1-9 {
    padding: 1.9rem;
}

.bg-secondary {
    background: #15395A !important;
}
@media screen and (min-width: 576px){
    .pe-sm-6, .px-sm-6 {
        padding-right: 3.5rem;
    }
}
@media screen and (min-width: 576px){
    .ps-sm-6, .px-sm-6 {
        padding-left: 3.5rem;
    }
}
.pe-1-9, .px-1-9 {
    padding-right: 1.9rem;
}
.ps-1-9, .px-1-9 {
    padding-left: 1.9rem;
}
.pb-1-9, .py-1-9 {
    padding-bottom: 1.9rem;
}
.pt-1-9, .py-1-9 {
    padding-top: 1.9rem;
}
.mb-1-9, .my-1-9 {
    margin-bottom: 1.9rem;
}
@media (min-width: 992px){
    .d-lg-inline-block {
        display: inline-block!important;
    }
}
.rounded {
    border-radius: 0.25rem!important;
}


</style>

</head>
<body>
<section class="bg-light">
<div class="container">
<div class="row">
<div class="col-lg-12 mb-4 mb-sm-5">
<div class="card card-style1 border-0">
<div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
<div class="row align-items-center">
<div class="col-lg-6 mb-4 mb-lg-0">
<!--<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">-->
<div><?php if($tipo=="cliente"){ ?>
    <img src="UPLOADS/CLIENTES/<?=$foto?>" alt="...">

    <?php } ?>
<?php if($tipo=="corretor"){ ?>
    <img src="UPLOADS/CORRETORES/<?=$foto?>" alt="...">

    <?php } ?></div>
</div>
<div class="col-lg-6 px-xl-10">
<?php if($tipo=="cliente"){ ?>
<div class="bg-danger d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
<h3 class="h2 text-white mb-0" style="font-family: lato; text-transform: uppercase;"><b><?=$nome_cliente?></b></h3>
</div>
<ul class="list-unstyled mb-1-9">
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">ESTADO CIVIL: </span> <?=$estado_civil?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">TELEFONE: </span> <?=$telefone?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">EMAIL: </span> <?=$email?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">CPF: </span> <?=$cpf_cliente?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">RG: </span> <?=$rg?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">NOME DO CONJUGE: </span> <?=$nome_conjuge?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">CPF DO CONJUGE: </span> <?=$cpf_conjuge?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">SENHA: </span> <?=$senha?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">ENDEREÇO: </span> <?=$endereco?></li>

</ul>
<?php } ?>

<?php if($tipo=="corretor"){ ?>
<div class="bg-danger d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
<h3 class="h2 text-white mb-0" style="font-family: lato; text-transform: uppercase;"><b><?=$nome_corretor?></b></h3>
</div>
<ul class="list-unstyled mb-1-9">
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">TELEFONE: </span> <?=$telefone?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">EMAIL: </span> <?=$email?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">CPF: </span> <?=$cpf_corretor?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">RG: </span> <?=$rg?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">DATA DE ADMISSÃO: </span> <?=$dt_admissao?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">NÚMERO DA MARÍCULA: </span> <?=$n_matricula?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">ENDERECO: </span> <?=$endereco?></li>
<li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-danger me-2 font-weight-600">SENHA: </span> <?=$senha?></li>

</ul>
<?php } ?>

<ul class="social-icon-style1 list-unstyled mb-0 ps-0">
<li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
<li><a href="#!"><i class="ti-facebook"></i></a></li>
<li><a href="#!"><i class="ti-pinterest"></i></a></li>
<li><a href="#!"><i class="ti-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>



</section>
<!--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">-->
	
<?php require_once("rodape.php"); ?>