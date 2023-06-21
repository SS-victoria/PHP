<?php

$año = intval(readline("Ingrese Año:  \n "));

if ((($año % 4)== 0) && (($año % 100) != 0 )):

    echo "el año es bisiesto";

    elseif (($año % 400) == 0) :
        echo "El año es bisiesto";
    else:
        echo "El año no es bisiesto";

    endif;

?>