<?php

$nombre = strval(readline("ingrese su nombre:  \n "));
$edad = intval(readline("ingrese su edad:  \n "));

if ($edad >= 18):
    ($licencia = strval(readline("Señor(a) $nombre ¿Tiene licencia de conducción: ? \n ")));

    if ($licencia == "si" || $licencia == "SI" || $licencia == "Si"):
    echo "  Señor(a) $nombre, ¡usted puedes conducir!  \n ";
    elseif ($licencia == "no" || $licencia == "NO" || $licencia == "No"):
        echo " Señor(a) $nombre, ¡necesita una licencia para poder conducir! \n ";   
    endif;
else:
    echo "Señor(a) $nombre, ¡usted no tiene edad para conducir! \n ";
endif

?>
