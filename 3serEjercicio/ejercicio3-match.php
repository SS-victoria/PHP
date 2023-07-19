<?php

$letra=strval(readline("Ingrese Letra \n"));

$vocal=match ($letra) {
    'a'=>"la letra ($letra) es una vocal" ,
    'e'=>"la letra ($letra) es una vocal" ,
    'i'=>"la letra ($letra)es una vocal" ,
    'o'=>"la letra ($letra) es una vocal" ,
    'u'=>"la letra ($letra) es una vocal" ,
    default=>"La letra ($letra) es una consonante"
};

echo "$vocal";
?>