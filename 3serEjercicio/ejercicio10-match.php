<?php

$numop = intval(readline('Ingrese opcion:   '));

$opcion=match (true) {
   $numop==1=> 'Sumara dos numeros',
   $numop==2=> 'Restara dos numeros',
   $numop==3=> 'Multiplicara dos numeros',
   $numop==4=> 'Dividira dos numeros',
   $numop==5=> 'Recibira la suma, resta, multiplicacion y divicion de los dos numeros',

   default=>"El numero $numop, No es una opcion valida, por favor ingrese un numero entre el 1 y el 5 \n"
    
};

echo "$opcion \n ";

$num1=intval(readline("Ingrese numero:  \n"));
$num2=intval(readline("Ingrese numero:  \n "));

if ($numop==1):
    $sumar=$num1+$num2;

    echo "La suma entre el numero $num1 y el numero $num2 es igual a $sumar \n ";

    elseif($numop==2):
        $resta=$num1-$num2;

        echo "La resta entre el numero $num1 y el numero $num2 es igual a $resta \n ";

    elseif($numop==3):
        $multi=$num1*$num2;
    
        echo "La Multiplicacion entre el numero $num1 y el numero $num2 es igual a $multi \n ";

    elseif($numop==4):
        $div=$num1/$num2;
        
        echo "La Division entre el numero $num1 y el numero $num2 es igual a $div \n ";

     elseif($numop==5):
        $sumar=$num1+$num2;
        $resta=$num1-$num2;
        $multi=$num1*$num2;
        $div=$num1/$num2;

         echo "La suma entre el numero $num1 y el numero $num2 es igual a $sumar \n
         La resta entre el numero $num1 y el numero $num2 es igual a $resta \n 
         La Multiplicacion entre el numero $num1 y el numero $num2 es igual a $multi \n
         La Division entre el numero $num1 y el numero $num2 es igual a $div \n";

endif;




?>