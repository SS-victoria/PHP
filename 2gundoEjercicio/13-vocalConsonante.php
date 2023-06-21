<?php

$letra = strval(readline("Ingrese Letra \n "));

$a = "a";
$e = "e";
$i = "i";
$o = "o";
$u = "u";
$am = "A";
$em = "E";
$im = "I";
$om = "O";
$um = "U";

$let =(($letra == $a)||($letra==$e)||($letra==$i)||($letra==$o)||($letra==$u)||($letra == $am)||($letra==$em)||($letra==$im)||($letra==$om)||($letra==$um))? "una vocal" : "una consonante";

    echo "La letra ($letra) es $let ";
?>



