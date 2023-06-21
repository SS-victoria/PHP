<?php
$nom = strval(readline("Ingrese su Nombre: \n  "));
$cal = intval(readline("Ingrese calificacion: \n  "));

if (($cal >= 90) && ($cal <= 100)):
    echo "Señor(a) $nom su calificacion es EXCELENTE!... \n ";
    elseif($cal >= 101):
        echo "Señor(a) $nom la calificacion es INVALIDA!... \n ";
    elseif (($cal >= 80) && ($cal <= 89)):
        echo "Señor(a) $nom su calificacion es BUENA!... \n ";
        elseif (($cal >= 70) && ($cal <= 79)):
            echo "Señor(a) $nom su calificacion es REGULAR!... \n ";
            elseif(($cal >= 60) && ($cal <= 69)):
                echo "Señor(a) $nom su calificacion es APROBADO!... \n ";
            else:
                echo "Señor(a) $nom su calificacion es REPROBO!... \n ";
endif;

?>