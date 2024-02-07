<?php
/*
Clases: una plantilla de la cual me basare para crear objetos
Objeto: es un elemento del mundo real
*/
/*
$marca = "Nissan";
$modelo = Sentra;
$placa = "DEF-456";
$año = "2024";
$motor = "180";
$combustible = "Petrolero";



$marca1 = "Toyota";
$modelo1 = Yaris;
$placa1 = "ABC-123";
$año1 = "2020";
$motor1 = "1500";
$combustible1 = "Gasolinero";
*/

class Automovil{
    //Atributos - Propiedades
    public $marca;
    public $modelo;
    public $placa;
    public $año;
    public $motor;
    public $combustible;
   

}

$auto1 = new Automovil; // instanciar
$auto2 = new Automovil;

$auto1->marca = "Nissan";
$auto1->modelo = "Sentra";
$auto1->placa = "DEF-456";
$auto1->año = "2024";
$auto1->motor = "1800";
$auto1->combustible = Petrolero;


$auto2->marca = "Toyota";
$auto2->modelo = "Yaris";
$auto2->placa = "ABC-123";
$auto2->año = "202";
$auto2->motor = "1500";
$auto2->combustible = Gasolinero;

echo $auto1->marca." tiene ".$auto1->modelo." años.";
echo "<br>";
echo $auto2->marca." tiene ".$auto2->modelo." años.";
?> 