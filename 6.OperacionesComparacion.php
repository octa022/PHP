<?php
//Operadores de comparación

$num1=13;
$num2="13";
//operador igual
echo "Operador igual == ";

var_dump($num1==$num2);
echo "<br>";

// operaor identico
echo "Operador identico === ";
var_dump($num1===$num2);
echo "<br>";

//operador diferente
echo "Operador diferente != ò <> ";
var_dump($num1!=$num2);
echo "<br>";

//operador no identico

echo "Operador no identico !== ";
var_dump($num1!==$num2);
echo "<br>";

//operador mayor que
$a=1;
$b=2;
echo "Operador maror que > ";
var_dump($a>$b);
echo "<br>";

//operador menor que
echo "Operador menor que < ";
var_dump($a<$b);
echo "<br>";

//operador mayor o igual que
echo "Operador maror o igual que >= ";
var_dump($a>=$b);
echo "<br>";

//operador menor o igual que
echo "Operador menor o igual que <= ";
var_dump($a<$b);
echo "<br>";

//operador nave espacial
echo "Operador nave espacial <=> ";
var_dump($a<=>$b); // -1	a < b
var_dump($b<=>$a); //  1 	b > a
var_dump($a<=>$a); //  0 	a = a
echo "<br>";

//operador de elvis
$resultado= true;
echo "Operador elvis ?: ";
//si variable es verdadera, regresa el valor
//sino envia la segunda opción
var_dump($resultado?:'no hay datos');
echo "<br>";

//Operador Ternario
echo "Operador ternario ?: ";
//si variable es verdadero, envia la primera opción
//sino envia la segunda opción
var_dump($resultado?'Verdadero':'Falso');
echo "<br>";

//Operador de fusiòn null
$resultado1 = null;
echo "Operador fusiòn null ?? ";
//si variable es verdadera, regresa el valor
//si variable es null, envia la segunda opción
var_dump($resultado1??'no hay datos');
echo "<br>";

/*
Nota: el operador null funciona de la misma forma que el operador elvis
la diferencia es que si no se agrega algún valor a la variable (vacio)
genera error, por lo tanto se tiene que verificar si existe algun valor
en la variable con la funcion isset()

*/
echo "isset() en elvis y ternario ";
var_dump(isset($resultado)?:'no hay datos');


?>