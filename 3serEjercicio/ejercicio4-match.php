<?php

$dia=intval(readline("ingrese Dia  \n"));
$mes=intval(readline("ingrese Mes \n"));
$año=intval(readline("ingrese Año   \n"));

if (($mes >= 1)&&($mes <= 12)):

    if (($dia >= 1)&&($dia <= 31)):
        
    

$meses=match ($mes){
    1=>'Enero',
    2=>'Febrero',
    3=>'Marzo',
    4=>'Abril',
    5=>'Mayo',
    6=>'Junio',
    7=>'Julio',
    8 =>'Agosto',
    9 =>'Septiembre',
    10=>'Octubre',
    11=>'Nobimbre',
    12=>'Diciembre',
    default=> "El mes ingresado no es correcto ingrese un numero de mes Entre (1 y 12)"
};
echo "La fecha ingresada es el dia ($dia) del mes de ($meses) del año ($año)";

else:
    echo "El dia ($dia) Ingresado no es valido, Ingrese un numero entre el 1 y el 31";
    endif;
else:
    echo "El numero de mes ($mes) no corresponde, Ingrese un numero del 1 al 12";
endif;
?>