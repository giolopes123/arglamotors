<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class TesteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexT.php");
		$sql = 'SELECT * FROM venda WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexT.php");
		$sql = 'SELECT * FROM venda';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		if (file_exists("conexT.php")) {
		    include("conexT.php");
		} else {
		    die("O arquivo conexT.php não foi encontrado.");
		}
		$sql = 'SELECT * FROM venda ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexT.php");
		$sql = 'DELETE FROM venda WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($venda){
		include("conexT.php");
		$sql = 'INSERT INTO venda (cod, nome, telefone, email, endereco, veiculosComprados) VALUES (:cod, :nome, :telefone, :email, :endereco, :veiculosComprados)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$venda->getCod()); 

		$consulta->bindValue(':nome',$venda->getNome()); 

		$consulta->bindValue(':telefone',$venda->getTelefone()); 

		$consulta->bindValue(':email',$venda->getEmail()); 

		$consulta->bindValue(':endereco',$venda->getEndereco()); 

		$consulta->bindValue(':veiculosComprados',$venda->getVeiculosComprados()); 

	
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($venda){
		include("conexT.php");
		$sql = 'UPDATE venda SET cod = :cod, nome = :nome, telefone = :telefone, email = :email, endereco = :endereco, veiculosComprados = :veiculosComprados WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$venda->getCod()); 

		$consulta->bindValue(':nome',$venda->getNome()); 

		$consulta->bindValue(':telefone',$venda->getTelefone()); 

		$consulta->bindValue(':email',$venda->getEmail()); 

		$consulta->bindValue(':endereco',$venda->getEndereco()); 

		$consulta->bindValue(':veiculosComprados',$venda->getVeiculosComprados()); 

	
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexT.php");
		$sql = 'DELETE FROM venda';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>
