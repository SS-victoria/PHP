<?php

$hora=intval(readline('Ingrese Hora:  '));
$min=intval(readline('Ingrese Minutos:  '));

if ($min<=59):
$franja=match (true) {
    $hora==0=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==1=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==2=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==3=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==4=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==5=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==6=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==7=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==8=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==9=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora+14).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==10=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==11=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==12=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==13=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==14=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==15=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==16=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora+7).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==17=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora+6).':'.$min,
    $hora==18=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora-18).':'.$min,
    $hora==19=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora-18).':'.$min,
    $hora==20=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora-18).':'.$min,
    $hora==21=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora-18).':'.$min,
    $hora==22=> 'la hora en Canada es   '.($hora+1).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora-18).':'.$min,
    $hora==23=> 'la hora en Canada es   '.($hora-23).':'.$min."\nla hora en Japon es   ".($hora-10).':'.$min."\nla hora en Barcelona es   ".($hora-17).':'.$min."\nLa hora en londres es  ".($hora-18).':'.$min,
    
    
    default=>'La hora ingresada es incorrecta'
};
echo "$franja";
else: echo "El minuto ($min) no es validos por favor ingrese un numero entre el 00 al 59";
endif;

?>