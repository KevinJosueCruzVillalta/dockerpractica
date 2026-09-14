<?php
// hola mundo
echo "hola mundo\n";

/*comentario
comentario*/


//Variables

$my_string = "Esto es una cadena de texto";
$my_string = "Aqui cambio el valor de la cadena de texto";
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = 6; //Tipado dinamico
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "Esto es una cadena de texto";

$my_int = 7;
$my_int = $my_int + 3;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double. "\n";

$my_bool = true;
echo $my_bool . "\n";
$my_bool = false;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";
?>