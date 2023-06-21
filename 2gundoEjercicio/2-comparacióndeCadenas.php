<?php

$nombre = strval(readline("Ingrese Nombre  \n"));



if ($nombre == "juan" OR $nombre == "JUAN"):
    echo "¡Hola Juan!";
elseif($nombre != "juan" OR $nombre != "JUAN"):
    echo "¡Lo siento intruso, no te conozco";
endif;


?>