<?php

// es una estructura de datos que permite almacenar multiples valores

//arreglos indexados
//declaracion con array
$frutas = array("Manzana", "Pera", "Uva");
echo $frutas[1];
echo "<hr>";

echo "<pre>";
var_dump($frutas);
echo "</pre>";
echo "<hr>";

//sintaxis corta de array
$colores = ["rojo", "negro", "blanco"];
echo "<pre>";
var_dump($colores);
echo "</pre>";
echo "<hr>";

//agregar un elemento al final del arreglo
$colores[] = "gris";
$colores[1] = "azul";
$colores[10] = "purpura";
var_dump($colores);
?>