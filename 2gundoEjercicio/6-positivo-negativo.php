<?php

$num = intval(readline("Ingrese Numero:  \n"));

if ($num > 0 ):
    echo "El numero $num es ¡Positivo!...";
    elseif ($num === 0):
        echo "El numero $num es un ¡Cero!...";
    else: echo "El numero $num es ¡Negativo!...";
endif;




