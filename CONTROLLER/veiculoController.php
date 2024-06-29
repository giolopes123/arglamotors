<?php 
  require_once("include_dao.php");


  $veiculoModel = new Veiculo();
  $veiculoDAO = new VeiculoDAO();
  $veiculos = $veiculoDAO->listarTodos();

  $acao=isset($_POST['acao'])? $_POST['acao']: "";
  $cod=isset($_POST['cod'])? $_POST['cod']: "";
  $n_placa=isset($_POST['n_placa'])? $_POST['n_placa']: "";
  $n_chassi=isset($_POST['n_chassi'])? $_POST['n_chassi']: "";
  $quilometragem=isset($_POST['quilometragem'])? $_POST['quilometragem']: "";
  $ano_de_fabricacao=isset($_POST['ano_de_fabricacao'])? $_POST['ano_de_fabricacao']: "";
  $descricao=isset($_POST['descricao'])? $_POST['descricao']: "";
  $foto=isset($_FILES['foto'])? $_FILES['foto']: "";
  $cor=isset($_POST['cor'])? $_POST['cor']: "";
  $preco=isset($_POST['preco'])? $_POST['preco']: "";
  $marca=isset($_POST['marca'])? $_POST['marca']: "";
  $modelo=isset($_POST['modelo'])? $_POST['modelo']: "";
  $pesquisa=isset($_GET['pesquisa'])? $_GET['pesquisa']:"";
 
  $veiculoModel->setCod($cod);
  $veiculoModel->setN_placa($n_placa);
  $veiculoModel->setN_chassi($n_chassi);
  $veiculoModel->setQuilometragem($quilometragem);
  $veiculoModel->setAno_de_fabricacao($ano_de_fabricacao);
  $veiculoModel->setDescricao($descricao);
  $veiculoModel->setCor($cor);
  $veiculoModel->setPreco($preco);
  $veiculoModel->setMarca($marca);
  $veiculoModel->setModelo($modelo);

if (empty($pesquisa)) {
  $veiculos = $veiculoDAO->listarTodos();
}
else{
  $veiculos = $veiculoDAO->pesquisar($pesquisa);
}

  if (!empty($foto['name'])) {
    $resultado = explode(".", $foto['name']);
    $nome =  $resultado[0];
    $tipo = $resultado[1];
    $novoNome = ("veiculo-".md5(time()*rand()).".".$tipo);
    $destino = "./UPLOADS/VEICULOS/$novoNome";
    move_uploaded_file($foto["tmp_name"], $destino);

  }
  else{
    $novoNome = "semfoto.png";
  }
  
  $veiculoModel->setFoto($novoNome);

if($acao == "Adicionar"){
  
  $veiculoDAO->inserir($veiculoModel);
  echo("<script>window.location='veiculoView.php?msg=adicionado'</script>");

}

else if($acao == "Excluir"){  
  $veiculoDAO->deletar($veiculoModel->getCod());
  echo("<script>window.location='veiculoView.php?msg=excluido'</script>");

}

else if($acao == "Editar"){
  if(empty($foto['name'])){
    $veiculoDAO->atualizarSemFoto($veiculoModel);
  }
  else{
    $veiculoAntigo = $veiculoDAO->carregar($veiculoModel->getCod());
    unlink("./UPLOADS/VEICULOS/".$veiculoAntigo['foto']);
    $veiculoDAO->atualizar($veiculoModel);
  }
  echo("<script>window.location='veiculoView.php?msg=atualizado'</script>"); 
}

?>