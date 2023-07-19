<?php

$num=intval(readline("Ingrese Numero: \n "));

$mensaje=match ($num) {
    1=>'Buenos Dias',
    2=>'Buenas Tardes',
    3=>'Buenas Noches',
    default =>'El numero ingresado es invalido'
};
echo "$mensaje";
?>