<?php

$num1 = intval(readline("Ingrese Primer Numero \n   "));
$num2 = intval(readline("Ingrese Segundo Numero \n  "));

if (($num1 > 10 ) && ($num2 > 10 )):
    echo "el numero $num1 y el numero $num2 son mayores que 10";

elseif (($num1 > 10 ) && ($num2 < 10)):
    echo "solo el numero $num1 es mayor a 10";

    elseif (($num1 < 10) && ($num2 > 10)):
        echo " solo el numero $num2 es mayor a 10";

    else:
        echo "El numero $num1 y el numero $num2 no son mayores a 10";
endif;


?>