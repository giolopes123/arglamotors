<?php 

  require_once('conexao.php');
  require_once("include_dao.php");


  $clienteModel = new cliente();
  $clienteDAO = new clienteDAO();
  $clientes = $clienteDAO->listarTodos();

  $acao=isset($_POST['acao'])? $_POST['acao']: "";
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
  $pesquisa=isset($_GET['pesquisa'])? $_GET['pesquisa']:"";
 
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
 
//and  $foto['type'] == "image/jpeg" or $foto['type'] == "image/jpg" or $foto['type'] == "image/png"

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



if (empty($pesquisa)) {
  $clientes = $clienteDAO->listarTodos();
}
else{
  $clientes = $clienteDAO->pesquisar($pesquisa);
}


if($acao == "Adicionar"){

  $clienteDAO->inserir($clienteModel);
  echo("<script>window.location='clienteView.php?msg=adicionado'</script>");

}

else if($acao == "Excluir"){  
  $clienteDAO->deletar($clienteModel->getCod());
  echo("<script>window.location='clienteView.php?msg=excluido'</script>");

}

else if($acao == "Editar"){

  if(empty($foto['name'])){
    $clienteDAO->atualizarSemFoto($clienteModel);
  }
  else{
    $clienteAntigo = $clienteDAO->carregar($clienteModel->getCod());
    unlink("./UPLOADS/CLIENTES/".$clienteAntigo['foto']);
    $clienteDAO->atualizar($clienteModel);
  }
  echo("<script>window.location='clienteView.php?msg=atualizado'</script>"); 
}

?>
