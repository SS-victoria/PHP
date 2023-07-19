<?php

$numCal=intval(readline('Ingrese Calificacion:  '));

if($numCal<=100):

$calificacion=match(true){
        $numCal>=75=>'Su calificacion es EXELENTE',
        $numCal>=50=>'Su calificacion es SOBRESALIENTE',
        $numCal>=25=>'Su calificacion es ACEPTABLE',
        $numCal>=0 =>'Su calificacion es INSUFICIENTE',
        default=>'El numero no corresponde'
};

echo "$calificacion";
else: 
    echo "El numero ($numCal), no es una calificacion correcta, ingrese un numero del 1 al 100";

endif;


?>