<?php

$nombre = strtolower(readline('ingrese Usuario:  '));
$nid = intval(readline('ingrese NID:  '));

if (($nombre == "jonathan") && ($nid=='1083897967')):
    echo "\nBienvenido $nombre \n";
else:
    echo 'Usuaro o nid incorrecto';
endif;

if (($nombre == "jonathan") && ($nid=='1083897967')):

echo "\n Registro de nuevo usuario  \n" ;
$regnom = strtolower(readline('Ingrese Nombre:    ')); 
$regnid = intval(readline('Ingrese NID:           '));
$reggen = strtolower(readline('Ingrese Genero:    '));
$regeda = intval(readline('Ingrese Edad:          '));
$regest = intval(readline('Ingrese Estatura:      '));
$regpes = intval(readline('Ingrese Peso:          '));
$regfum = strtolower(readline('Es fumador:        '));


$nombre1   = $regnom;
$nid1      = $regnid;
$genero1   = $reggen;
$edad1     = $regeda;
$estatura1 = $regest;
$peso1     = $regpes;
$fuma1     = $regfum;

echo "\n Buscar usuario \n";

$busnom = strtolower(readline("Nombre onid de usuario:  "));

if (($busnom==$nombre1)OR($busnom==$nid1)):
    echo"El usuario $nombre1 tiene $edad1 años y es de genero $genero1.  ";

endif;

endif;
?>