<?php

$color=strval(readline("Ingrese Color \n"));

$temperatura=match ($color) {
    'rojo'=>'Esta Caluroso',
    'azul'=>'Esta Fresco',
    'amarillo'=>'Es Calido',
    'blanco'=>'Probablemente Nevado',
    default=>'color no valido'
};

echo "$temperatura";

?>