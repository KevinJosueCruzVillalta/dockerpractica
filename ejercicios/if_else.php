<?php
//If else
// si no es verdadero hacemos esto

//Verificar si un numero es positivo o negativo
$numero = 5;
if($numero >= 0){
    echo "Tenemos un positivo o cero es $numero";
} else{
    echo "El numero $numero es negativo!!";
}

echo "<hr>";

//Verificar si un usuario esta logeado
$usuarioLogeado = true;

if($usuarioLogeado){
    echo "Bienvenido";
} else{
    echo "Por favor inicia sesion";
}

?>