<?php
$dia=15;$mes=3;
if(($mes==3&&$dia>=21)||($mes==4&&$dia<=20))$horoscopo="Aries";
elseif(($mes==4&&$dia>=21)||($mes==5&&$dia<=21))$horoscopo="Tauro";
elseif(($mes==5&&$dia>=22)||($mes==6&&$dia<=21))$horoscopo="Géminis";
elseif(($mes==6&&$dia>=22)||($mes==7&&$dia<=22))$horoscopo="Cáncer";
elseif(($mes==7&&$dia>=23)||($mes==8&&$dia<=23))$horoscopo="Leo";
elseif(($mes==8&&$dia>=24)||($mes==9&&$dia<=23))$horoscopo="Virgo";
elseif(($mes==9&&$dia>=24)||($mes==10&&$dia<=23))$horoscopo="Libra";
elseif(($mes==10&&$dia>=24)||($mes==11&&$dia<=22))$horoscopo="Escorpio";
elseif(($mes==11&&$dia>=23)||($mes==12&&$dia<=21))$horoscopo="Sagitario";
elseif(($mes==12&&$dia>=22)||($mes==1&&$dia<=20))$horoscopo="Capricornio";
elseif(($mes==1&&$dia>=21)||($mes==2&&$dia<=18))$horoscopo="Acuario";
elseif(($mes==2&&$dia>=19)||($mes==3&&$dia<=20))$horoscopo="Piscis";
echo "Horóscopo: $horoscopo\n";
?>
