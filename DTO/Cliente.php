<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Cliente{
		//Atributos
		private $cod;

 		private $estado_civil;

 		private $nome_cliente;

 		private $cpf_cliente;

 		private $nome_conjuge;

 		private $cpf_conjuge;

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

		public function getEstado_civil(){
			return $this->estado_civil;
		}

		public function getNome_cliente(){
			return $this->nome_cliente;
		}

		public function getCpf_cliente(){
			return $this->cpf_cliente;
		}

		public function getNome_conjuge(){
			return $this->nome_conjuge;
		}

		public function getCpf_conjuge(){
			return $this->cpf_conjuge;
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


		public function setEstado_civil($estado_civil){
			$this->estado_civil=$estado_civil;
		}

		public function setNome_cliente($nome_cliente){
			$this->nome_cliente=$nome_cliente;
		}

		public function setCpf_cliente($cpf_cliente){
			$this->cpf_cliente=$cpf_cliente;
		}

		public function setNome_conjuge($nome_conjuge){
			$this->nome_conjuge=$nome_conjuge;
		}

		public function setCpf_conjuge($cpf_conjuge){
			$this->cpf_conjuge=$cpf_conjuge;
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