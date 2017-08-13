<?php
/**
 * Created by PhpStorm.
 * User: octavio
 * Date: 13/08/17
 * Time: 02:43 PM
 */
echo '<h1>Variables</h1> </br>';

$integer=1;
$float=1.5;
$istrue=true;
$arrayColors = array('Negro','Azul','ROjo');
$string="Cadena";

echo $integer;
echo $float;
if ($istrue){
    echo 'Verdadero <br>';
};
echo $arrayColors[1];
echo $string;

// Variables Globales y Locales
echo '<h2>Variables Globales</h2>';

function variablesGlobales(){
    $local='Variable Local';
    echo $GLOBALS['Global'];
    echo $local;
}

$Global='Escribiendo Variable Global';
variablesGlobales();

// Variables superglobals