<?php
//Conversión de Tipos
echo '<h1>Conversion de Numeros Enteros</h1><br>';
//Contexto: el tipo de la variable se va a determinar por el contexto en el cual estemos utilizando
$variable="20 Hola";
$suma=20+$variable;

echo $suma.' ';
echo gettype($suma); //tipo de la variable
//resultado: 40 integer
echo '<br>';

//Forzado de tipo
$int=(int)$variable;

echo $int.' ';
echo gettype($int).'<br>';

$v1=true;
$v2=false;
$v3 = 8.1;
echo $int1=(int)$v1;
echo gettype($int1).'<br>'; // resultado: 1 integer
//echo $int1;

$int2=(int)$v2;
echo $int2.'<br>'; // resultado: 0

echo $int1=(int)$v3;
echo gettype($int1).'<br>'; // resultado: 8

//Función
// se crea una variable = intval()
$funcion=intval($v3);
echo $funcion;
echo gettype($funcion).'<br>'; // resultado: 8

//conversión a números tipo float o double (numero real) 
echo '<h1>Conversion de Numeros a tipo float o double</h1><br>';
//Contexto
$variable1="20.1 Hola";
$suma1=20+$variable1;
echo $suma1;
echo gettype($suma1).'<br>';

//forzado de Tipo
$numReal=(float)$v3;
echo $numReal;
echo gettype($numReal).'<br>';

//funcion
$funcionReal=floatval($variable1);
echo $funcionReal;
echo gettype($funcionReal);

echo '<h1>Conversion de Numeros a tipo booleano</h1><br>';
//Forzado de Tipo y funcion
$v4=0.0; // si los datos son vacios o 0 no imprime nada
// se crea una variable
$boolean=(boolean)$variable;
$bool=boolval($v4); // resultado: 1
echo $boolean;
echo $bool; // resultado: no se aprecia
echo '<br>';

echo '<h1>Conversion de Numeros a tipo array</h1><br>';
//función explode
$numeros='1,2,3,4,5';
//explode("separador",variable,limite)
$arrayNumeros=explode(",",$numeros,5);
echo $arrayNumeros[0].'<br>';
echo $arrayNumeros[1].'<br>';
echo $arrayNumeros[2].'<br>';

//tipo forzado
$array=(array)$v4;
echo $array[0].'<br>';

//Convertir de array a string
$arrayColores=array('azul','rojo','morado');
$string=implode('-',$arrayColores);
echo $string;

