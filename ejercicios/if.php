<?php
/*
Que es una estructura de control?
- es una estructura  que nos ayuda a controlar el flujo de nuestro programa, es decir, nos permite decidir que instrucciones se ejecutan y cuales no.
- nos permite tomar decisiones en base a una condicion.
 */

//if - es una estructura condicional que nos permite ejecutar un bloque de codigo si se cumple una condicion.
/**
 * su estructura es la siguiente:
 * if (condicion) {
 * }
 */

if (true) {
    echo "La condicion es verdadera\n";
}
echo "<hr>";

//Verificar si un numero es mayor que 10.

$numero = 15;

if ($numero > 10) {
    echo "El numero $numero es mayor que 10\n";
}
echo"hr";

//Verificar si una variable esta definida y no este vacia
$texto = "Hola que tal";
if(isset($texto) && !empty($texto)){
    echo "Texto valido: $texto";
}
echo "<hr>";

//Verificar si una persona tiene acceso.
$estaRegistrado = true;
if($estaRegistrado){
    echo "Acceso consedido al sistema";
}

?>