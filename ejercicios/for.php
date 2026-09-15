<?php

// es una estructura de control de bucle
//esta tiene un inicio un fin y un acumulador

for($i = 1; $i <= 10; $i++){
    echo $i;
}

$numero = 2;
for($i = 1; $i <= 10; $i++){
    $tabla = $numero . " x " . $i . " = " . ($numero * $i);
    echo $tabla . "<br>";
}

?>