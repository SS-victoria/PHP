<?php

$num = intval(readline("Ingrese Numero \n"));

$div = (($num % 3)== 0 && ($num % 5) == 0 ) ? "El num $num Es divisible por 3 y por 5" : "El numero $num No es divisible por 3 y por 5";

echo "$div";

?>