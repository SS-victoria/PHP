<?php

$nombre = strval(readline("Nombre Alumno:  \n"));
$cal = intval(readline("Ingrese Calificacion  \n"));

if ($cal >= 90):
    echo "Estimado $nombre, su calificacion es de $cal, por lo tanto su calificacion es sobresaliente... felicitaciones!...  ";

    elseif (($cal >= 60) && ($cal <= 89)):
        echo "Aprobo";
    else:
        echo "Reprobo";


endif;


?>