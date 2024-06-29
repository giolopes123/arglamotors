<?php
  session_start();
  $dados = $_POST['data'];
  $novoItem = json_decode($dados, true);
  
  if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
  }

  array_push($_SESSION['carrinho'], $novoItem);
  header("location:car.php");
  echo "Produto adicionado ao carrinho.";


if(isset($_POST['cod'])) {
    $codProduto = json_decode($_POST['cod'], true);

    if (($key = array_search($codProduto, $_SESSION['carrinho'])) !== false) {
        unset($_SESSION['carrinho'][$key]);
     
        echo "Produto removido do carrinho com sucesso.";
    } 
}

?>