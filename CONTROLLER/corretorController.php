<?php 

  require_once('conexao.php');
  require_once("include_dao.php");


  $corretorModel = new Corretor();
  $corretorDAO = new CorretorDAO();
  $corretores = $corretorDAO->listarTodos();

  $acao=isset($_POST['acao'])? $_POST['acao']: "";
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
  $pesquisa=isset($_GET['pesquisa'])? $_GET['pesquisa']:"";
 
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

if (empty($pesquisa)) {
  $corretores = $corretorDAO->listarTodos();
}
else{
  $corretores = $corretorDAO->pesquisar($pesquisa);
}

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

if($acao == "Adicionar"){
  
  $corretorDAO->inserir($corretorModel);
  echo("<script>window.location='corretorView.php?msg=adicionado'</script>");

}

else if($acao == "Excluir"){  
  $corretorDAO->deletar($corretorModel->getCod());
  echo("<script>window.location='corretorView.php?msg=excluido'</script>");

}

else if($acao == "Editar"){
  if(empty($foto['name'])){
    $corretorDAO->atualizarSemFoto($corretorModel);
  }
  else{
    $corretorAntigo = $corretorDAO->carregar($corretorModel->getCod());
    unlink("UPLOADS/CORRETORES/".$corretorAntigo['foto']);
    $corretorDAO->atualizar($corretorModel);
    
    // Atualizar a sessão com a nova foto
    $_SESSION['login']['nome_corretor'] = $corretorModel->getNome_corretor($nome_corretor);
    $_SESSION['login']['endereco'] = $corretorModel->getEndereco($endereco);
    $_SESSION['login']['email'] = $corretorModel->getEmail($email);
    $_SESSION['login']['dt_admissao'] = $corretorModel->getDt_admissao($dt_admissao);
    $_SESSION['login']['cpf_corretor'] = $corretorModel->getCpf_corretor($cpf_corretor);
    $_SESSION['login']['n_matricula'] = $corretorModel->getN_matricula($n_matricula);
    $_SESSION['login']['rg'] = $corretorModel->getRg($rg);
    $_SESSION['login']['telefone'] = $corretorModel->getTelefone($telefone);
    $_SESSION['login']['senha'] = $corretorModel->getSenha($senha);
    $_SESSION['login']['foto'] = $corretorModel->getFoto($foto);

  }
  echo("<script>window.location='corretorView.php?msg=atualizado'</script>"); 
}

?>