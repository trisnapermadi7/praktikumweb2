<?php
$celcius = 37.841;
$fahrenheit = (9/5) * $celcius + 32;
$reamur = (4/9) * ($fahrenheit - 32);
$kelvin = $celcius + 273.15;
$celcius = number_format($celcius, 3, ',', '.');
$fahrenheit = number_format($fahrenheit, 4, ',', '.');
$reamur = number_format($reamur, 4, ',', '.');
$kelvin = number_format($kelvin, 3, ',', '.');
printf("Fahrenheit (F) = %s <br>", $fahrenheit);
printf("Reamur (R) = %s <br>", $reamur);
printf("Kelvin (K) = %s <br>", $kelvin);
?>
