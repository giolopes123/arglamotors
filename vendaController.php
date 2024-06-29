<?php

require_once("DAO/ClienteDAO.php");
require_once("DTO/Cliente.php");
require_once("DAO/testeDAO.php");
require_once("DTO/teste.php");

$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
$vendaModel = new Teste();
$vendaDAO = new TesteDAO();
$vendas = $vendaDAO->listarTodos();

$clienteModel = new Cliente();
$clienteDAO = new ClienteDAO();
$clientes = $clienteDAO->listarTodos();

if($acao == "adicionar"){
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
    $veiculosComprados = isset($_POST['veiculosComprados']) ? $_POST['veiculosComprados'] : "";


    $clienteModel->setEmail($email);
    $resultado=$clienteDAO->carregarE($clienteModel->getEmail());
  
  if ($resultado == false) {
    echo("<script>window.location='checkout.php?msg=naoexiste'</script>");
  }else{
    $vendaModel->setNome($nome);
    $vendaModel->setTelefone($telefone);
    $vendaModel->setEmail($email);
    $vendaModel->setEndereco($endereco);    
    $vendaModel->setVeiculosComprados($veiculosComprados);

    $resultado = $vendaDAO->inserir($vendaModel);
    if($resultado){
        echo("<script>window.location='checkout.php?msg=comprado'</script>");
    } else {
        echo("<script>alert('Erro ao finalizar a compra');</script>");
    }
  }
}
?>
