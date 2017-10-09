<?php
echo "<h3>Operadores Aritmeticos</h3>";
//Suma
$a=5;
$b=4;
$suma=$a+$b;
echo "$a + $b = $suma<br>";

//Resta
$resta=$a-$b;
echo "$a - $b = $resta<br>";

//Multiplicacción
$multiplicacion=$a*$b;
echo "$a * $b = $multiplicacion<br>";

//División
$division=$a/$b;
echo "$a / $b = $division<br>";

//Modulo
//Modulo=Dividendo-(Divisor*Cociente)
$modulo=$a%$b;
echo "Modulo division = $modulo<br>";

//Exponenciación a^b
$exponenciación=$a**$b;
echo "$a ^ $b = $exponenciación<br>";

//Identidad y negación (ley de los signos)
$identidad = +$resta;
echo" $identidad<br>";
$negacion = -$resta;
echo "$negacion<br>";

?>