<?php

$coches = ["deportivo", "sedan", "camioneta"];

for($i = 0; $i < count($coches); $i++){
    echo "el indice $i esta " . $coches[$i];
    echo "<br>";
}

echo "<hr>";

//recorrer indexados con foreach
$numeros = [1,2,3,4,5,6,7,8];
foreach($numeros as $numero){
    echo $numero;
    echo "br";
}
echo "<hr>";

foreach ($numeros as $indice => $valor) {
    echo "el indice es $indice y el valor es $valor";
    echo "<br>";
}
?>