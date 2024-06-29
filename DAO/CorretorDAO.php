<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class CorretorDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM corretor WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	public function carregarE($email){
		include("conexao.php");
		$sql = 'SELECT * FROM corretor WHERE email = :email';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":email",$email);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	//Pesquisa elementos pelo nome
	public function pesquisar($pesquisa){
		include("conexao.php");
		$sql = 'SELECT * FROM corretor WHERE nome_corretor LIKE :pesquisa';
		$consulta = $conexao->prepare($sql);
		$pesquisa = "%".$pesquisa."%";
		$consulta->bindValue(":pesquisa",$pesquisa);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM corretor';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM corretor ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM corretor WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($corretor){
			include("conexao.php");
			$sql = 'INSERT INTO corretor (n_matricula, dt_admissao, cpf_corretor, nome_corretor, email, endereco, rg, foto, telefone, senha) VALUES (:n_matricula, :dt_admissao, :cpf_corretor, :nome_corretor, :email, :endereco, :rg, :foto, :telefone, :senha)';
			$consulta = $conexao->prepare($sql);


			$consulta->bindValue(':n_matricula',$corretor->getN_matricula()); 

			$consulta->bindValue(':dt_admissao',$corretor->getDt_admissao()); 

			$consulta->bindValue(':cpf_corretor',$corretor->getCpf_corretor()); 

			$consulta->bindValue(':nome_corretor',$corretor->getNome_corretor()); 

			$consulta->bindValue(':email',$corretor->getEmail()); 

			$consulta->bindValue(':endereco',$corretor->getEndereco()); 

			$consulta->bindValue(':rg',$corretor->getRg()); 

			$consulta->bindValue(':foto',$corretor->getFoto());
			
			$consulta->bindValue(':telefone',$corretor->getTelefone());

			$consulta->bindValue(':senha',$corretor->getSenha());

			if($consulta->execute())
				return true;
			else
				return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($corretor){
		include("conexao.php");
		$sql = 'UPDATE corretor SET email = :email, endereco = :endereco, foto = :foto, telefone = :telefone , senha = :senha, nome_corretor = :nome_corretor, n_matricula = :n_matricula,  dt_admissao = :dt_admissao, cpf_corretor = :cpf_corretor, rg = :rg WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$corretor->getCod()); 

		$consulta->bindValue(':email',$corretor->getEmail()); 

		$consulta->bindValue(':endereco',$corretor->getEndereco()); 

		$consulta->bindValue(':foto',$corretor->getFoto()); 

		$consulta->bindValue(':telefone',$corretor->getTelefone());

		$consulta->bindValue(':senha',$corretor->getSenha());

		$consulta->bindValue(':nome_corretor',$corretor->getNome_corretor());

		$consulta->bindValue(':n_matricula',$corretor->getN_matricula());

		$consulta->bindValue(':dt_admissao',$corretor->getDt_admissao());

		$consulta->bindValue(':cpf_corretor',$corretor->getCpf_corretor());

		$consulta->bindValue(':rg',$corretor->getRg());

		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function atualizarSemFoto($corretor){
		include("conexao.php");
		$sql = 'UPDATE corretor SET email = :email, endereco = :endereco, telefone = :telefone , senha = :senha, nome_corretor = :nome_corretor, n_matricula = :n_matricula,  dt_admissao = :dt_admissao, cpf_corretor = :cpf_corretor, rg = :rg WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$corretor->getCod()); 

		$consulta->bindValue(':email',$corretor->getEmail()); 

		$consulta->bindValue(':endereco',$corretor->getEndereco());  

		$consulta->bindValue(':telefone',$corretor->getTelefone());

		$consulta->bindValue(':senha',$corretor->getSenha());

		$consulta->bindValue(':nome_corretor',$corretor->getNome_corretor());

		$consulta->bindValue(':n_matricula',$corretor->getN_matricula());

		$consulta->bindValue(':dt_admissao',$corretor->getDt_admissao());

		$consulta->bindValue(':cpf_corretor',$corretor->getCpf_corretor());

		$consulta->bindValue(':rg',$corretor->getRg());

		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM corretor';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function logar($email,$senha){
		include("conexao.php");
		$sql = 'SELECT * FROM corretor WHERE email =:email AND senha =:senha';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":email",$email);
		$consulta->bindValue(":senha",$senha);
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}
}
?>