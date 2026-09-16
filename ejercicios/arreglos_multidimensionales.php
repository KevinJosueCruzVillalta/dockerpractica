<?php

//arreglo multidimension
//es un arreglo que contiene otros arreglos como elementos

#arreglo bidimensional
$estudiantes = [
    ["juan", 25, "Ing"],
    ["maria", 25, "Medico"]
];

echo $estudiantes [0][0]; //juan
echo "<br>";
echo $estudiantes [1][2]; //profesion

//arreglo multidimencional asociativo

$productos = [
    "lapto" =>[
        "marca" => "hp",
        "precio" => 8000,
        "stock" => 5
    ],
    "mouse" =>[
        "marca" => "Logitech",
        "precio" => 500,
        "stock" => 20
    ]
];
echo "<hr>";
//adquirir el precio de la lapto
echo $productos["lapto"]["precio"];

?>