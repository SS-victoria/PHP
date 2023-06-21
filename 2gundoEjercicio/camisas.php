<?php
$nombre = strval(readline("Su nombre \n"));
$camisas = intval(readline("Numero de camisas \n"));

$VAL = 10000;

$descuento = ($camisas >= 3) ? ($VAL - $VAL * 0.2) * $camisas : ($VAL - $VAL * 0.1) * $camisas;

echo "Señor $nombre, por la compra de $camisas camisas, su total a pagar es de: $descuento";

?>