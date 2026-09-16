<?php

$numeros = [1,2,3,4,5];
//contar elemntos de un arreglo
echo "<h467>Contar elementos en un arreglo</h467>";
echo count($numeros);
echo "<hr>";

//agregar al final de un arreglo
array_push($numeros, 6);
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";

//agregar al inicio del arreglo
array_unshift($numeros, 0);
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";

//eliminar al final de un arreglo
$elimino = array_pop($numeros);
echo $elimino;
echo "<pre>";
var_dump($numeros);
echo "</pre>";

//eliminar al inicio
$elInicio = array_shift($numeros);
echo $elInicio;
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";

//verificar si existe una clave
$personas = [
    "nombre" => "roldan",
    "curso" => "php"
];

//verificar si existe un valor
if(in_array("roldan", $personas)){
    echo"el nombre esta en el arreglo";
}else{
    echo "Nolo encontre";
}
echo "<hr>";

//funciones de ordenamiento:
//orden ascendente
sort($numeros);
print_r($numeros);
echo "<hr>";

//orden decendente
rsort($numeros);
print_r($numeros);
echo "<hr>";

//Combinar arreglos
$a = [1,2,3];
$b = [4,5,6];
$c = array_merge($a, $b);
print_r($c);
echo "<hr>";

//buscar en un arreglo
$posicion = array_search(6, $b);
echo $b[$posicion];
?>