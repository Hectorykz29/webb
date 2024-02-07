<?php
class Coche
{
public $color;
public $potencia;
public $velocidad = 12;
public $conbustible="gasolina";
public $litros =3;
public function acelerar($velocidad) {
    if ($velocidad < 0 ){
        echo "<br>el carro esta acelerando";
    }else{
        echo "<br>el carro esta paradefo";
    }
    
}
public function litros() {
    return "Hay {$this->litros} litros." ;
    }
}
$miCoche = new Coche;
$miCoche->acelerar();

print_r($miCoche);
?>