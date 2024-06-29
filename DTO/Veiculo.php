<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Veiculo{
		//Atributos
		private $cod;

 		private $n_placa;

 		private $n_chassi;

 		private $quilometragem;

 		private $ano_de_fabricacao;

 		private $descricao;

 		private $cor;

 		private $preco;

		private $marca;

		private $modelo;
		
		private $foto;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}

		public function getN_placa(){
			return $this->n_placa;
		}

		public function getN_chassi(){
			return $this->n_chassi;
		}

		public function getQuilometragem(){
			return $this->quilometragem;
		}

		public function getAno_de_fabricacao(){
			return $this->ano_de_fabricacao;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function getCor(){
			return $this->cor;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getMarca(){
			return $this->marca;
		}

		public function getModelo(){
			return $this->modelo;
		}

		public function getFoto(){
			return $this->foto;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}

		public function setN_placa($n_placa){
			$this->n_placa=$n_placa;
		}

		public function setN_chassi($n_chassi){
			$this->n_chassi=$n_chassi;
		}

		public function setQuilometragem($quilometragem){
			$this->quilometragem=$quilometragem;
		}

		public function setAno_de_fabricacao($ano_de_fabricacao){
			$this->ano_de_fabricacao=$ano_de_fabricacao;
		}

		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}

		public function setCor($cor){
			$this->cor=$cor;
		}

		public function setPreco($preco){
			$this->preco=$preco;
		}

		public function setMarca($marca){
			$this->marca=$marca;
		}

		public function setModelo($modelo){
			$this->modelo=$modelo;
		}

		public function setFoto($foto){
			$this->foto=$foto;
		}
		
	}
?>