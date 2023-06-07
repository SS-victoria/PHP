<?php
//$PI = 2500000;

$sueldo = 2500000;
$porciento = 10;
$divisor = 100;

$descuento = $sueldo * $porciento / $divisor ;

$porcentaje = $sueldo - $descuento;

echo "el pago es de  $porcentaje, despues de restarle el 10% por aportes a los $sueldo ";

?>


