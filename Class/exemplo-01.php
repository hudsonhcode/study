<?php
	class Pessoa{

		public $nome;//Atributo

		public function falar(){

			return "O meu nome é ".$this->nome;
		}


	}

	$hudson = new Pessoa();
	$hudson->nome = "Hudson Rodrigues";
	echo $hudson->falar();
	

?>