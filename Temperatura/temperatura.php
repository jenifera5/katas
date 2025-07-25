<?php 
class Temperatura{
      private  float $valor;
      private  string $escala;

      public function __construct(float $valor,string $escala)
      {
            $this->valor = $valor;
            $this->escala = $escala;
      }

      public function convertir()
      {
          $celsius=0.0;
          if ($this->escala==="Celsius") {
          }elseif ($this->escala==="Kelvin") {
             $celsius=$this->valor - 273.15;
          }elseif ($this->escala==="Farenheit") {
             $celsius= ($this->valor -32 )* 5 / 9;
          }


          $kelvin = $celsius + 273.15;
          $farenheit = $celsius * 9 / 5 + 32;

          return match ($this->escala) {
            "Celsius"=>"Celsius:$this->valor Kelvin:" . round($kelvin, 2)." Farenheit:". round($farenheit, 2),
            "Kelvin"=>"Kelvin:$this->valor  Celcius:". round($celsius, 2)." Farenheit:". round($farenheit, 2) ,
            "Farenheit"=>"Farenheit:$this->valor  Celsius". round($celsius, 2)." Kelvin:". round($kelvin, 2),
          };
      }




}
?>