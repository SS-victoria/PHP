<?php

$num=intval(readline('ingrese Numero de Mes: '));

$mes=match($num){
    1=> 'El mes ingresado es Enero' ,
    2=> 'El mes ingresado es Febrero' ,
    3=> 'El mes ingresado es Marzo' ,
    4=> 'El mes ingresado es Abril' ,
    5=> 'El mes ingresado es Mayo' ,
    6=> 'El mes ingresado es Junio' ,
    7=> 'El mes ingresado es Julio' ,
    8=> 'El mes ingresado es Agosto' ,
    9=> 'El mes ingresado es Septiembre' ,
    10=>'El mes ingresado es Octubre' ,
    11=>'El mes ingresado es Nobiembre' ,
    12=>'El mes ingresado es Diciembre' ,
    default=>'El numero ingresado no corresponde a ningun mes'
};

echo "$mes";

?>