<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class VeiculoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM veiculo WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	//Pesquisa elementos pela marca
	public function pesquisar($pesquisa){
		include("conexao.php");
		$sql = 'SELECT * FROM veiculo WHERE marca LIKE :pesquisa';
		$consulta = $conexao->prepare($sql);
		$pesquisa = "%".$pesquisa."%";
		$consulta->bindValue(":pesquisa",$pesquisa);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM veiculo';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM veiculo ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM veiculo WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($veiculo){
		include("conexao.php");
		$sql = 'INSERT INTO veiculo (cod, n_placa, n_chassi, quilometragem, ano_de_fabricacao, descricao, cor, preco, marca, modelo, foto) VALUES (:cod,  :n_placa, :n_chassi, :quilometragem, :ano_de_fabricacao, :descricao, :cor, :preco, :marca, :modelo, :foto)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$veiculo->getCod()); 

		$consulta->bindValue(':n_placa',$veiculo->getN_placa()); 

		$consulta->bindValue(':n_chassi',$veiculo->getN_chassi()); 

		$consulta->bindValue(':quilometragem',$veiculo->getQuilometragem()); 

		$consulta->bindValue(':ano_de_fabricacao',$veiculo->getAno_de_fabricacao()); 

		$consulta->bindValue(':descricao',$veiculo->getDescricao()); 

		$consulta->bindValue(':cor',$veiculo->getCor()); 

		$consulta->bindValue(':preco',$veiculo->getPreco()); 
		
		$consulta->bindValue(':marca',$veiculo->getMarca()); 

		$consulta->bindValue(':modelo',$veiculo->getModelo());

		$consulta->bindValue(':foto',$veiculo->getFoto());

		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($veiculo){
		include("conexao.php");
		$sql = 'UPDATE veiculo SET cod = :cod, n_placa = :n_placa, n_chassi = :n_chassi, quilometragem = :quilometragem, ano_de_fabricacao = :ano_de_fabricacao, descricao = :descricao, cor = :cor, preco = :preco, marca = :marca, modelo = :modelo, foto = :foto WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$veiculo->getCod());  

		$consulta->bindValue(':n_placa',$veiculo->getN_placa()); 

		$consulta->bindValue(':n_chassi',$veiculo->getN_chassi()); 

		$consulta->bindValue(':quilometragem',$veiculo->getQuilometragem()); 

		$consulta->bindValue(':ano_de_fabricacao',$veiculo->getAno_de_fabricacao()); 

		$consulta->bindValue(':descricao',$veiculo->getDescricao()); 

		$consulta->bindValue(':cor',$veiculo->getCor()); 

		$consulta->bindValue(':preco',$veiculo->getPreco()); 

		$consulta->bindValue(':marca',$veiculo->getMarca()); 

		$consulta->bindValue(':modelo',$veiculo->getModelo()); 

		$consulta->bindValue(':foto',$veiculo->getFoto()); 

		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Atualiza um elemento na tabela sem foto
	public function atualizarSemFoto($veiculo){
		include("conexao.php");
		$sql = 'UPDATE veiculo SET cod = :cod, n_placa = :n_placa, n_chassi = :n_chassi, quilometragem = :quilometragem, ano_de_fabricacao = :ano_de_fabricacao, descricao = :descricao, cor = :cor, preco = :preco, marca = :marca, modelo = :modelo WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$veiculo->getCod());  

		$consulta->bindValue(':n_placa',$veiculo->getN_placa()); 

		$consulta->bindValue(':n_chassi',$veiculo->getN_chassi()); 

		$consulta->bindValue(':quilometragem',$veiculo->getQuilometragem()); 

		$consulta->bindValue(':ano_de_fabricacao',$veiculo->getAno_de_fabricacao()); 

		$consulta->bindValue(':descricao',$veiculo->getDescricao()); 

		$consulta->bindValue(':cor',$veiculo->getCor()); 

		$consulta->bindValue(':preco',$veiculo->getPreco()); 

		$consulta->bindValue(':marca',$veiculo->getMarca()); 

		$consulta->bindValue(':modelo',$veiculo->getModelo()); 

		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM veiculo';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>