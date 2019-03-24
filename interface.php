<?php 

interface  Veiculo {

   public function acelerar($velocidade);
   public function frenar($velocidade);
   public function trocarMarcha($marcha);
}


class Civic implements Veiculo{
    
    public function acelerar ($velocidade)
    {

      echo "o veiculo acelerou até "  . $velocidade . "km/h";
    }

     public function frenar ($velocidade)
    {
     
     echo "o veiculo frenou até "  . $velocidade . "km/h";

    }

public function trocarMarcha ($marcha)
{
   echo "o veiculo engatou a marcha "  . $marcha ;

}
}

$carro = new Civic();

$carro->trocarMarcha(1);



 ?>