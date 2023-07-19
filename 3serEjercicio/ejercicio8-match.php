<?php

$text=strval(readline('Ingrese cadena de texto:  '));


$tx=strlen($text);
$int=(int)$tx;

$numCara=match(true){
    $tx>=10=>"La cadena de texto ingresada ($text), tiene 10 o mas caracteres; es una cadena larga",
    $tx>=5=>"La cadena de texto ingresada ($text), tiene mas de 5 y menos de 10 caracteres; es una cadena mediana ",
    $tx>=0=>"La cadena de texto ingresada ($text), tiene menos de 5 caracteres; es una cadena corta",
};

echo "$numCara";

?>