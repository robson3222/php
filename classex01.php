<?php
 
class Pessoa{

	public $nome;//atributo

	public function falar(){//metodo

		return "o meu nome é ".$this->nome;
	}
}
 
 $rob = new Pessoa ();
 $rob->nome = "Rob";
 echo $rob->falar();
 ?>