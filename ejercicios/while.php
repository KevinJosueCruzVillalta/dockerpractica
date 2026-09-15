<?php

//Es una estructura de control de repeticion que se ejecutara
//mientras su condicion sea verdadera

/*while(true){
    echo"hola";
}*/

//contar numeros
$numero = 1;
while ($numero <= 3){
    echo "El numero es $numero";
    echo "<p>";
    $numero = $numero + 1;
}
echo "<hr>";

//Repetir un mensaje con while

$veces = 0;

while($veces < 4){
    echo "$veces . - Hola que tal";
    echo "<br>";
    $veces ++;
}

?>