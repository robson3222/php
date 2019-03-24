<?php 

abstract class Animal{

	public function falar(){
		return "som";
	}

    public function mover(){
    	
    	return "anda";

    }
}

class Cachorro extends Animal{
    
     public function falar(){
         return "late";


     }


}

class Gato extends Animal{
	
	public function falar(){

		return "mia";
	}
}

class Passaro extends Animal{

	public function falar(){
		
		return "canta";
	}


	public function mover(){

		return "voa e" . parent::mover();
	}
}





$Ave = new Passaro();
echo "ave <br/>";

echo $Ave->falar() . "<br/>";
echo $Ave->mover() . "<br/>";


echo "--------------------------------------<br/>";


$pluto = new Cachorro();
echo "cachorro <br/>";
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";


echo "--------------------------------------<br/>";


$tom = new Gato();
echo "gato <br/>";
echo $tom->falar() . "<br/>";
echo $tom->mover() . "<br/>";


 ?>