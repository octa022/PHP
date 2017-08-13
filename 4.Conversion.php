<?php
/**
 * Created by PhpStorm.
 * User: octavio
 * Date: 13/08/17
 * Time: 05:09 PM
 */
echo '<h1>Conversion de Numeros Enteros</h1><br>';
//Contexto
$variable="20 Hola";
$suma=20+$variable;

echo $suma;
echo gettype($suma);
echo '<br>';

//Forzado de tipo
$int=(int)$variable;

echo $int;
echo gettype($int);
echo '<br>';

$v1=true;
$v2=false;
$v3 = 8.1;
echo $int1=(int)$v1;
echo gettype($int1);
//echo $int1;
echo '<br>';
$int2=(int)$v2;
echo $int2;
echo '<br>';

echo $int1=(int)$v3;
echo gettype($int1);
echo '<br>';
//Función
$funcion=intval($v1);
echo $funcion;
echo gettype($funcion);
echo '<br>';

echo '<h1>Conversion de Numeros a tipo float o double</h1><br>';
//Contexto
$variable1="20.1 Hola";
$suma1=20+$variable1;
echo $suma1;
echo gettype($suma1);
echo '<br>';
//forzado de Tipo
$numReal=(float)$v3;
echo $numReal;
echo gettype($numReal);
echo '<br>';
//funcion
$funcionReal=floatval($v3);
echo $funcionReal;
echo gettype($funcionReal);

echo '<h1>Conversion de Numeros a tipo booleano</h1><br>';
//Forzado de Tipo y funcion
$v4=0.0;
$boolean=(boolean)$variable;
$bool=boolval($v4);
echo $boolean;
echo $bool;
echo '<br>';

echo '<h1>Conversion de Numeros a tipo array</h1><br>';
//funcion explode
$numeros='1,2,3,4,5';
$arrayNumeros=explode(",",$numeros,5);
echo $arrayNumeros[0];
echo $arrayNumeros[1];
echo $arrayNumeros[2];
echo '<br>';

//Convertir de array a string
$arrayColores=array('agul','rojo','morado');
$string=implode(' ',$arrayColores);
echo $string;

