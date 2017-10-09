<?php
echo '<h1>Variables</h1> </br>';

$integer=1;
$float=1.5;
$istrue=true;
$arrayColores = array('Negro','Azul','Rojo');
$string="Cadena";

echo $integer.'</br>';
echo $float.'</br>';
if ($istrue){
    echo 'Verdadero <br>';
};
echo $arrayColores[1].'</br>';
echo $string;

// Variables Globales y Locales
echo '<h2>Variables Globales</h2>';

function variablesGlobales(){
    $local='Variable Local'.'</br>';
    echo $GLOBALS['Global'];
    echo $local;	
}
//Asignarle un valor a la variable Global
$Global='Escribiendo Variable Global'.'</br>';
// LLamamos la Funcion
variablesGlobales();

/* Variables superglobals

    $GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIE
    $_SESSION
    $_REQUEST
    $_ENV

http://php.net/manual/es/language.variables.superglobals.php

*/
?>