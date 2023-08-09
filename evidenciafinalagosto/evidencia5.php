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

echo "\n Buscar usuario \n";

$busnom = strtolower(readline("Nombre o nid de usuario:  "));

if (($busnom==$regnom)OR($busnom==$regnid)):
    echo"El usuario $regnom tiene $regeda años y es de genero $reggen.  ";

endif;

endif;
?>
