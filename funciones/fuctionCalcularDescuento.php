<?php
$valor =$_POST ['costo'];
$porcentaje =$_POST ['descuento'];

function calcularDescuento (int $valor, float $porcentaje){

    $descuento= (($valor-($valor * $porcentaje) /100));

    $total = $descuento;

    echo "$total";
    
}

calcularDescuento($valor, $porcentaje);





















// function calcularDescuento (int $precio, float $descuento){
//     $porcentaje=($precio*$descuento)/100;
//     // return $multi;
//     echo "$porcentaje";

// }

// calcularDescuento(50000,10);

?>