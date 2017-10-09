<?php
echo '<h1>Concatenación e Interpolación</h1><br>';

// Comillas Dobles
//Concatenación
//Forma 1
$palabra="Primera ";
$union=$palabra . "Forma" . "<br>";
echo $union;
//Forma 2
//concatenar
$palabra1="Segunda ";
$palabra1 .="Forma";
echo $palabra1."<br>";

// Interpolación (con "" dobles)
echo "$palabra de interpolar<br>";
echo "{$palabra} y {$palabra1} de interpolar <br>";

/* 
Se recomienda usar la Interpolación (mas rápides)
http://artprima.eu/925-string-variables-concatenation-vs-variable-interpolation.html
*/

/*
Caracteres escapados(solo con "" dobles)
\n avance de linea 
\r retorno de carro
\t tabulador horizontal
\v tabulador vertical
\e escape
\f avance de pagina
\\ barra invertida
\$ signo de dolar
\" comillas dobles

http://php.net/manual/es/language.types.string.php

*/
echo "hola \n hola";
?>
