<?php
/**
 * Estructuras repititivas
 * -Operadores de incremento y decremento
 * ++$variable       incrementa el valor de la variable en uno antes de evaluar la variable
 * $variable++       incrementa el valor de la variable en uno, evalua y luego incrementa
 * 
 * --$variable       disminuye el valor de la variable en uno antes de evaluar la variable
 * $variable--       disminuye el valor de la variable en uno, evalua y luego incrementa
 * 
 * *Operadores complejos
 *  +=      un operador de aumento y acumulacion
 *  -=      un operador de disminucion y acumulacion
 *  *=        un operador que acumula valores en productos
 *  /=        un operador que acumula divisiones
 * 
 * *Contadores
 *  $contador=$contador + 1; // %contador++
 * 
 * *Acumuladores
 *  $acumaldor = $acumulador + $valor; // $acumulador +- $valor
 * 
 * ESTRUCTURA REPETITIVA WHILE
 * while(condicion)(
 * instrucciones a repetir;
 * )
 */
$i = i;
while ($i <=10) {
    echo $i. "<br>";
    $i++;
   }

   //Listar los N primeros pares
   $n = 20;
   $1 = 1;;
   while ($i <=$n) {
       if ($i % 2 == 0) {
        echo $i. "<br>";
    }
    $i++;
    }

   //Listar los N primeros elementos de la siguiente serie: 1/2, 3/4, 5/6,..N
   $n = 20;
$i = 1;

while ($i <= $n) {
  echo $i . "/" . ($i + 1) . "<br>";
  $i++;
}

   //Listar los N primeros elementos de la siguiente serie: 1/5, -2/10, -3/15, -4/20   ,..N
   $n = 20;
   $i = 1;
   $num = 1;
   $den = 5;
   while ($i <= $n) {
       if ($i % 2 != 0) {
           echo $num."/".$den."<br>";
       }else{
           echo "-".$num."/".$den."<br>";
       }
       $num+=1;
       $den+=5;
       $i++;
   }  
   
    // Mostrar en pantalla todos los numeros pares comprendidos entre 1 y 1000
      // en filas de 5 numeros, 10 numeros y 15 numeros
      /**
       * 2,4,6,8,10
       * 12,14,16,18,20,22,24,26,28,30
       * 32,34,36,38,40,42,44,46,48,50,52,54,56,58,60
       */


 ?>