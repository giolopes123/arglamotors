<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ClienteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	public function carregarE($email){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE email = :email';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":email",$email);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	//Pesquisa elementos pelo nome
	public function pesquisar($pesquisa){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE nome_cliente LIKE :pesquisa';
		$consulta = $conexao->prepare($sql);
		$pesquisa = "%".$pesquisa."%";
		$consulta->bindValue(":pesquisa",$pesquisa);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($cliente){
		include("conexao.php");
		$sql = 'INSERT INTO cliente (cod, estado_civil, nome_cliente, cpf_cliente, nome_conjuge, cpf_conjuge, email, endereco, rg, foto, telefone, senha) VALUES (:cod, :estado_civil, :nome_cliente, :cpf_cliente, :nome_conjuge, :cpf_conjuge, :email, :endereco, :rg, :foto, :telefone, :senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 

		$consulta->bindValue(':estado_civil',$cliente->getEstado_civil()); 

		$consulta->bindValue(':nome_cliente',$cliente->getNome_cliente()); 

		$consulta->bindValue(':cpf_cliente',$cliente->getCpf_cliente()); 

		$consulta->bindValue(':nome_conjuge',$cliente->getNome_conjuge()); 

		$consulta->bindValue(':cpf_conjuge',$cliente->getCpf_conjuge()); 

		$consulta->bindValue(':email',$cliente->getEmail()); 

		$consulta->bindValue(':endereco',$cliente->getEndereco()); 

		$consulta->bindValue(':rg',$cliente->getRg()); 

		$consulta->bindValue(':foto',$cliente->getFoto()); 

		$consulta->bindValue(':telefone',$cliente->getTelefone()); 

		$consulta->bindValue(':senha',$cliente->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente){
		include("conexao.php");
		$sql = 'UPDATE cliente SET cod = :cod, estado_civil = :estado_civil, nome_cliente = :nome_cliente, cpf_cliente = :cpf_cliente, nome_conjuge = :nome_conjuge, cpf_conjuge = :cpf_conjuge, email = :email, endereco = :endereco, rg = :rg, foto = :foto, telefone = :telefone, senha = :senha WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 

		$consulta->bindValue(':estado_civil',$cliente->getEstado_civil()); 

		$consulta->bindValue(':nome_cliente',$cliente->getNome_cliente()); 

		$consulta->bindValue(':cpf_cliente',$cliente->getCpf_cliente()); 

		$consulta->bindValue(':nome_conjuge',$cliente->getNome_conjuge()); 

		$consulta->bindValue(':cpf_conjuge',$cliente->getCpf_conjuge()); 

		$consulta->bindValue(':email',$cliente->getEmail()); 

		$consulta->bindValue(':endereco',$cliente->getEndereco()); 

		$consulta->bindValue(':rg',$cliente->getRg()); 

		$consulta->bindValue(':foto',$cliente->getFoto()); 

		$consulta->bindValue(':telefone',$cliente->getTelefone()); 

		$consulta->bindValue(':senha',$cliente->getSenha());
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Atualiza um elemento na tabela
	public function atualizarSemFoto($cliente){
		include("conexao.php");
		$sql = 'UPDATE cliente SET cod = :cod, estado_civil = :estado_civil, nome_cliente = :nome_cliente, cpf_cliente = :cpf_cliente, nome_conjuge = :nome_conjuge, cpf_conjuge = :cpf_conjuge, email = :email, endereco = :endereco, rg = :rg, telefone = :telefone, senha = :senha WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 

		$consulta->bindValue(':estado_civil',$cliente->getEstado_civil()); 

		$consulta->bindValue(':nome_cliente',$cliente->getNome_cliente()); 

		$consulta->bindValue(':cpf_cliente',$cliente->getCpf_cliente()); 

		$consulta->bindValue(':nome_conjuge',$cliente->getNome_conjuge()); 

		$consulta->bindValue(':cpf_conjuge',$cliente->getCpf_conjuge()); 

		$consulta->bindValue(':email',$cliente->getEmail()); 

		$consulta->bindValue(':endereco',$cliente->getEndereco()); 

		$consulta->bindValue(':rg',$cliente->getRg()); 

		$consulta->bindValue(':telefone',$cliente->getTelefone()); 

		$consulta->bindValue(':senha',$cliente->getSenha());
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	
	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function logar($email,$senha){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE email =:email AND senha =:senha';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":email",$email);
		$consulta->bindValue(":senha",$senha);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}
}
?>