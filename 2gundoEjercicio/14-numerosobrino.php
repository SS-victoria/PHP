<?php

$num = intval(readline("Ingrese Numero: \n "));

for ($un=1; $un <= $num ;  $un++){
    if($num % $un == 0){
        $res = ($num%$un==0);
        $resi = ($res==2);
        echo "es primo";

    }
}



?>

