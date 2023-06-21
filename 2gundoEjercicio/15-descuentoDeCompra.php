<?php

$valcompra = intval(readline("VALOR COMPRA:  \n "));

$DES10 = $valcompra*10/100;
$DES5  = $valcompra*5/100;


if ($valcompra >= 1000):
    $total1 = ($valcompra - $DES10);
    echo "Su compra tiene un valor de $valcompra, lo cual le otorga un descuento del 10%, su total a pagar es de = $total1";
    elseif(($valcompra >= 500)&&($valcompra <=900)):
        $total2 = ($valcompra - $DES5);
        echo "Su compra tiene un valor de $valcompra, lo cual le otorga un descuento del 5%, su total a pagar es de = $total2";
    else:
        echo"Su compara es de ($valcompra), Por lo tanto no aplica descuento, Su total a Pagar es = $valcompra";
endif;

?>