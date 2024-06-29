<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Teste{
		//Atributos
		private $cod;

 		private $nome;

 		private $telefone;

 		private $email;

 		private $endereco;

 		private $veiculosComprados;


 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function getVeiculosComprados(){
			return $this->veiculosComprados;
		}

			
		public function setCod($cod){
			$this->cod=$cod;
		}

		public function setNome($nome){
			$this->nome=$nome;
		}

		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function setEndereco($endereco){
			$this->endereco=$endereco;
		}

		public function setVeiculosComprados($veiculosComprados){
			$this->veiculosComprados=$veiculosComprados;
		}

		

		
	}
?>
