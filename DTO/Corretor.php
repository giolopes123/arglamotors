<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Corretor{
		//Atributos
		private $cod;

 		private $n_matricula;

 		private $dt_admissao;

 		private $cpf_corretor;

 		private $nome_corretor;

 		private $email;

 		private $endereco;

 		private $rg;

 		private $foto;

		 private $telefone;

		 private $senha;

 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}

		public function getN_matricula(){
			return $this->n_matricula;
		}

		public function getDt_admissao(){
			return $this->dt_admissao;
		}

		public function getCpf_corretor(){
			return $this->cpf_corretor;
		}

		public function getNome_corretor(){
			return $this->nome_corretor;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function getRg(){
			return $this->rg;
		}

		public function getFoto(){
			return $this->foto;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setCod($cod){
			$this->cod=$cod;
		}

		public function setN_matricula($n_matricula){
			$this->n_matricula=$n_matricula;
		}

		public function setDt_admissao($dt_admissao){
			$this->dt_admissao=$dt_admissao;
		}

		public function setCpf_corretor($cpf_corretor){
			$this->cpf_corretor=$cpf_corretor;
		}

		public function setNome_corretor($nome_corretor){
			$this->nome_corretor=$nome_corretor;
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function setEndereco($endereco){
			$this->endereco=$endereco;
		}

		public function setRg($rg){
			$this->rg=$rg;
		}

		public function setFoto($foto){
			$this->foto=$foto;
		}

		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}

		public function setSenha($senha){
			$this->senha=$senha;
		}

		
	}
?>