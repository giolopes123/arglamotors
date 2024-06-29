<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Usuario{
		//Atributos
		private $cod;
 		private $login;
 		private $senha;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getSenha(){
			return $this->senha;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		
	}
?>