<?php

$numero = intval(readline("ingrese numero \n "));

$lunes = 1;
$martes = 2;
$miercoles = 3;
$jueves = 4;
$viernes = 5; 
$sabado = 6;
$domingo = 7;

if ($numero == $lunes):
    echo "lunes!...";
elseif ($numero == $martes):
    echo "martes!...";

elseif ($numero == $miercoles):
    echo "miercoles!...";

elseif ($numero == $jueves):
    echo "jueves!...";
elseif ($numero == $viernes):
    echo "viernes!...";
elseif ($numero == $sabado):
    echo "sabado!...";
elseif ($numero == $domingo):
    echo "domingo!...";
elseif($numero >= 8):
    echo "¡Numero Invalido!, Ingrese un numero del 1 al 7...";
endif;


?>