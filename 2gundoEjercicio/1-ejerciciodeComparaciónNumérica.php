<?php
$numero = intval(readline("Ingrese Numero  \n"));

 $NUM = 10 ;


// if ($numero < $NUM):

//     echo "el numero $numero en menor que 10 \n";

// endif;

// if ($numero == $NUM):

//     echo "el numero $numero es igual a 10 \n";

// endif;

// if ($numero > $NUM):
//     echo "el numero $numero es mayor que 10 \n";

// endif;

// if ($numero < $NUM){
//     echo "El numero Ingresado es menor que $NUM \n";
// }elseif ($numero == $NUM){
//     echo "El numero Ingresado es igual a $NUM";
// }else{
//     echo "El numero ingresado de mayor que $NUM";
// }


if ($numero < $NUM):
    echo "El numero ingresado es menor que $NUM";
elseif ($numero == $NUM):
    echo "El numero ingresado es igual a $NUM";
else:
    echo "El numero ingresado es mayor que $NUM";
endif;
?>