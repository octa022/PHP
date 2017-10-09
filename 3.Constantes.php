<?php
echo '<h1>Constantes</h1><br>';
// Definición de constantes usando el la palabra reservada const
echo '<h2>Utilizando const</h2><br>';
// Se declara una constante en Mayúscula, para distinguir de las variables
// const NOMBRECONSTANTE = 'ValorConstante'
const CONSTANTE='Es una Constante';
// No se Puede Redefinir una Constante o eliminar una vez se hayan definido
const NUMERO='1';

//Constante de tipo array
const COLORES=array('Amarillo','Azul','Rojo');

echo CONSTANTE.'<br>';
echo NUMERO.'<br>';
echo COLORES[0].'<br>';
echo COLORES[1].'<br>';
echo COLORES[2].'<br>';

//Definición de constantes define())
echo '<h2>Utilizando define</h2><br>';
// define('nombreConstante','valorCOnstante') 
define('CONSTANTE2','Prueba Constante 2');
echo CONSTANTE2.'<br>';

//Tipo array en define
//define('nombreConstante',array('valor1','valor2','valorN'))
define('COLORES2',array('Negro','Blanco','Gris'));

echo COLORES2[0].'<br>';
echo COLORES2[1].'<br>';
echo COLORES2[2].'<br>';


/*Constantes predefinidas  
http://php.net/manual/es/language.constants.predefined.php

Constantes predefinidas del núcleo
echo PHP_INT_MIN;
http://php.net/manual/es/reserved.constants.php
*/

?>