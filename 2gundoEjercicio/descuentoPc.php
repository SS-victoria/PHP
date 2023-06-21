<?php
$PRECIO = 700;

$numerodePc = intval(readline("ingrese el numero a comprar \n"));

$descuento10 = $PRECIO * 10 / 100;
$descuento20 = $PRECIO * 20 / 100;
$descuento40 = $PRECIO * 40 / 100;



// if ($numerodePc < 5):
//     $descuento1 = $PRECIO - $descuento10;
//     $totalapagar1 = $numerodePc * $descuento1;
    
//     echo "por la compra de $numerodePc computadores, se le otorga un descuento de $descuento10 , su total a pagar es de $totalapagar1 ";
// endif;

    if (($numerodePc >= 5) AND ($numerodePc <= 10) ):
    $descuento2 = $PRECIO - $descuento20;
    $totalapagar2 = $numerodePc * $descuento2;

    echo "por la compra de $numerodePc computadores, se le otorga un descuento de $descuento20 , su total a pagar es de $totalapagar2 ";
endif;

    if ($numerodePc >=11):
        $descuento3 = $PRECIO - $descuento40;
        $totalapagar3 = $numerodePc * $descuento3;
    
        echo "por la compra de $numerodePc computadores, se le otorga un descuento de $descuento40 , su total a pagar es de $totalapagar3 ";
    endif;

?>