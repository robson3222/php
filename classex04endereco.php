<?php
 
class Endereco {
  

  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($a, $b,$c){

  	 $this->logradouro =$a;
     $this->numero = $b;
     $this->cidade = $c;

  }

public function __destruct(){

	var_dump("destruir");
}
	
public function __toString(){

	return $this->logradouro.", ".$this->numero." - ".$this->cidade;
} 



 }



$meuEndereco = new Endereco("rua ademar saraiva", "123", "santos" );


var_dump($meuEndereco);


unset($meuEndereco);





 ?>