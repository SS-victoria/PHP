<?php

$num=intval(readline('Ingrese Numero de dia:   '));



    $dia=match ($num) {
        1=>'Lunes' ,
        2=>'Martes' ,
        3=>'Miercoles' ,
        4=>'Jueves' ,
        5=>'Viernes' ,
        6=>'Sabado' ,
        7=>'Domingo' ,

        default=>'El numero ingreado es incorrecto, ingrese un numero del 1 al 7'
    };




echo "$dia";

?>