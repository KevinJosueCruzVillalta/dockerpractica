<?php

// que es un arreglo asociativo
/*
utilizan claves o (keys), estas son personalizadas en lugar de usar indices
*/

//declaracion
$persona = array(
    "nombre" => "juan",
    "edad" => "25",
    "cuidad" => "El Salvador"
);

$producto = [
    "nombre" => "Lapto",
    "precio" => 10000,
    "marca" => "HP"
];

//acceso:
echo $persona["nombre"];

//agregar elementos
$persona["profesion"] = "Ing";
echo "<pre>";
var_dump($persona);
echo "</pre>";

?>