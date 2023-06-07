<?php

$nombre = readline("ingrese su nombre \n");
$sueldo = readline("ingrese su sueldo \n");
$sumaPorcentaje = ($sueldo * 15 / 100);

$suma = $sueldo + $sumaPorcentaje;

echo " Señor(a) $nombre su sueldo inicial es de: $sueldo, mas el 15% de aumento, da un total de: $suma \n ";

?>