<?php
/**
 * Created by PhpStorm.
 * User: octavio
 * Date: 13/08/17
 * Time: 03:19 PM
 */
echo '<h1>Constantes</h1><br>';
// const
echo '<h2>CONS</h2><br>';
const CONSTANTE='Es una Constante';
// No se Puede Redefinir una Constante

const NUMERO='1';
const COLORES=array('Amarillo','Azul','Rojo');

echo CONSTANTE;
echo NUMERO;
echo COLORES[0];
echo COLORES[1];
echo COLORES[2];

echo '<br>';
//define
echo '<h2>DEFINE</h2><br>';

define('CONSTANTE2','Prueba Constante 2');
echo CONSTANTE2;

define('COLORES2',array('Negro','Blanco','Gris'));
echo COLORES2[0];
echo COLORES2[1];
echo COLORES2[2];

echo '<br>';


//Constantes Predefinidas
//http://php.net/manual/es/language.constants.predefined.php