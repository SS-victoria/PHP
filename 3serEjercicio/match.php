<?php

$edad = 18;

$resultado = match(true){
    $edad >= 60 => 'Eres de la tercera edad',
    $edad >= 30 => 'Eres adulto',
    $edad >= 10 => 'Eres un niño',
    
    default => 'No existe esa edad'
};

echo "$resultado";

?>