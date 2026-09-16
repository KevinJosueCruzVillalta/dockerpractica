<?php

$persona =[
    "nombre" => "kevin",
    "edad" => 22,
    "ciudad" => "San Miguel",
    "profesion" => "Ing"
];

foreach ($persona as $key => $value) {
    echo "La llave es $key y el valor es $value";
    echo "<br>";
}

?>