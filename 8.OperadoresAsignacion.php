<?php
//Operadores de Asignación
$a=15;
$b=5;
//Operadores combinados
//+,-,*,/,**,%
$a+=$b; //suma a+b y lo asigna a
//misma estructura con todos los operadores
echo "$a<br>";
//asignaciones con string
$a.=$b;
echo "$a<br>"; //20 concatenado con 5 =205

//Operadores de Incremento y Decremento
//Incremento

$c=15;
echo "variable= $c <br>";
// Muestra y luego Incrementa
echo "Post-Incremento".$c++."<br>";
echo "Resultado".$c."<br>";
// Incrementa y luego muestra
echo "Pre-Incremento".++$c."<br>";
echo "Resultado".$c."<br>";

//Decremento

// Muestra y luego Decrementa
$c=15;
echo "Post-Decremento".$c--."<br>";
echo "Resultado".$c."<br>";
// Decrementa y luego muestra
echo "Pre-Decremento".--$c."<br>";
echo "Resultado".$c."<br>";


?>