<?php 

require_once("conexao.php");
require_once("include_dao.php");

$acao=isset($_POST['acao'])? $_POST['acao']: ""; 
$tipo=isset($_GET['tipo'])? $_GET['tipo']: "";  
$email=isset($_POST['email'])? $_POST['email']: "";
$senha=isset($_POST['senha'])? $_POST['senha']: "";


$clienteDAO = new ClienteDAO();
$clienteModel = new Cliente();
$corretorDAO = new CorretorDAO();
$corretorModel = new Corretor();

if ($acao=="EntrarA") {

  $corretorModel->setEmail($email);
  $corretorModel->setSenha($senha);
  $resultado=$corretorDAO->logar($corretorModel->getEmail(),$corretorModel->getSenha());
  
  if ($resultado==false) {
    header("location:../hvac-master/sem login.php?msg=erro");
  }
  else {
    
    // DECLARANDO A VARIÁVEL
    $corretorCorrente = $resultado;
    session_start();
    $_SESSION['tipo'] = 'corretor';
    $_SESSION['corretor'] = $corretorModel->getEmail();
    $_SESSION['login'] = $corretorCorrente;
    header("location:../hvac-master/index.php?msg=logado");

    // COM MSG
    /*session_start();
    $_SESSION['corretor'] = $corretorModel->getEmail();
    header("location:../hvac-master?msg=corretor");*/
  }  
}
  
else if($acao == "EntrarU"){

  $clienteModel->setEmail($email);
  $clienteModel->setSenha($senha);
  $resultado=$clienteDAO->logar($clienteModel->getEmail(),$clienteModel->getSenha());
  
  if ($resultado == false) {
    header("location:../hvac-master/sem login.php?msg=erro"); 
  }
  else {

    // DECLARANDO A VARIÁVEL
    $clienteCorrente = $resultado;
    session_start();
    $_SESSION['tipo'] = 'cliente';
    $_SESSION['cliente'] = $clienteModel->getEmail();
    $_SESSION['login'] = $clienteCorrente;
    header("location:../hvac-master/index.php?msg=logado");

    
    // COM MSG
    /*session_start();
    $_SESSION['cliente'] = $clienteModel->getEmail();
    header("location:../hvac-master?msg=cliente");*/
  } 
}

else if($acao == "AddU"){
  $cod=isset($_POST['cod'])? $_POST['cod']: "";
  $nome_cliente=isset($_POST['nome_cliente'])? $_POST['nome_cliente']: "";
  $endereco=isset($_POST['endereco'])? $_POST['endereco']: "";
  $email=isset($_POST['email'])? $_POST['email']: "";
  $cpf_conjuge=isset($_POST['cpf_conjuge'])? $_POST['cpf_conjuge']: "";
  $cpf_cliente=isset($_POST['cpf_cliente'])? $_POST['cpf_cliente']: "";
  $foto=isset($_FILES['foto'])? $_FILES['foto']: "";
  $nome_conjuge=isset($_POST['nome_conjuge'])? $_POST['nome_conjuge']: "";
  $estado_civil=isset($_POST['estado_civil'])? $_POST['estado_civil']: "";
  $rg=isset($_POST['rg'])? $_POST['rg']: "";
  $telefone=isset($_POST['telefone'])? $_POST['telefone']: "";
  $senha=isset($_POST['senha'])? $_POST['senha']: ""; 


  $clienteModel->setEmail($email);
  $resultado=$clienteDAO->carregarE($clienteModel->getEmail());
  
  if ($resultado == false) {
  $clienteModel->setCod($cod);
  $clienteModel->setNome_cliente($nome_cliente);
  $clienteModel->setEndereco($endereco);
  $clienteModel->setEmail($email);
  $clienteModel->setCpf_conjuge($cpf_conjuge);
  $clienteModel->setCpf_cliente($cpf_cliente);
  $clienteModel->setNome_conjuge($nome_conjuge);
  $clienteModel->setEstado_civil($estado_civil);
  $clienteModel->setRg($rg);
  $clienteModel->setTelefone($telefone);
  $clienteModel->setSenha($senha);

  if (!empty($foto['name'])) {
    $resultado = explode(".", $foto['name']);
    $nome =  $resultado[0];
    $tipo = $resultado[1];
    $novoNome = ("cliente-".md5(time()*rand()).".".$tipo);
    $destino = "./UPLOADS/CLIENTES/".$novoNome;
    move_uploaded_file($foto["tmp_name"], $destino);

  }
  else{
    $novoNome = "semfoto.png";
  }

    $clienteModel->setFoto($novoNome);

    $clienteDAO->inserir($clienteModel);
    echo("<script>window.location='sem login.php?msg=adicionadoU'</script>");
  }else{
    echo("<script>window.location='cadastrar-se.php?msg=jaexisteU'</script>");
  }
}

else if($acao == "AddA"){
  $cod=isset($_POST['cod'])? $_POST['cod']: "";
  $nome_corretor=isset($_POST['nome_corretor'])? $_POST['nome_corretor']: "";
  $endereco=isset($_POST['endereco'])? $_POST['endereco']: "";
  $email=isset($_POST['email'])? $_POST['email']: "";
  $dt_admisao=isset($_POST['dt_admissao'])? $_POST['dt_admissao']: "";
  $cpf_corretor=isset($_POST['cpf_corretor'])? $_POST['cpf_corretor']: "";
  $foto=isset($_FILES['foto'])? $_FILES['foto']: "";
  $n_matricula=isset($_POST['n_matricula'])? $_POST['n_matricula']: "";
  $rg=isset($_POST['rg'])? $_POST['rg']: "";
  $telefone=isset($_POST['telefone'])? $_POST['telefone']: "";
  $senha=isset($_POST['senha'])? $_POST['senha']: ""; 

  $corretorModel->setEmail($email);
  $resultado=$corretorDAO->carregarE($corretorModel->getEmail());
  
  if ($resultado == false) {
    $corretorModel->setCod($cod);
    $corretorModel->setNome_corretor($nome_corretor);
    $corretorModel->setEndereco($endereco);
    $corretorModel->setEmail($email);
    $corretorModel->setDt_admissao($dt_admisao);
    $corretorModel->setCpf_corretor($cpf_corretor);
    $corretorModel->setN_matricula($n_matricula);
    $corretorModel->setRg($rg);
    $corretorModel->setTelefone($telefone);
    $corretorModel->setSenha($senha);

    if (!empty($foto['name'])) {
      $resultado = explode(".", $foto['name']);
      $nome =  $resultado[0];
      $tipo = $resultado[1];
      $novoNome = ("corretor-".md5(time()*rand()).".".$tipo);
      $destino = "./UPLOADS/CORRETORES/$novoNome";
      move_uploaded_file($foto["tmp_name"], $destino);
    }
    else{
      $novoNome = "semfoto.png";
    }
    
    $corretorModel->setFoto($novoNome);

    $corretorDAO->inserir($corretorModel);
    echo("<script>window.location='sem login.php?msg=adicionadoA'</script>");
  }else{
    echo("<script>window.location='cadastrar-se.php?msg=jaexisteA'</script>"); 
  }
}

else if($acao == "VerificarEmailU"){

  $clienteModel->setEmail($email);
  $resultado=$clienteDAO->carregarE($clienteModel->getEmail());
  
  if ($resultado == false) {
    header("location:nova senha.php?msg=erro"); 
  }
  else {

    header("location:nova senha.php?msg=encontrado"); 
    // DECLARANDO A VARIÁVEL
    /*$clienteCorrente = $resultado;
    session_start();
    $_SESSION['tipo'] = 'cliente';
    $_SESSION['cliente'] = $clienteModel->getEmail();
    $_SESSION['login'] = $clienteCorrente;
    header("location:../hvac-master/nova senha.php");*/

    
    // COM MSG
    /*session_start();
    $_SESSION['cliente'] = $clienteModel->getEmail();
    header("location:../hvac-master?msg=cliente");*/
  } 
}


?>