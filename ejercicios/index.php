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

$my_bool = false;
echo $my_bool . "\n";
$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";

echo "El valor de mi integer es " . $my_int . " y el de boolean es: " . $my_bool . "\n";

//Constantes

const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";

// Listas

$my_array = [$my_string, $my_int, $my_double];
echo gettype($my_array) . "\n";
echo $my_array[0] . "\n";
array_push($my_array, $my_bool);
print_r($my_array);
// echo $my_array[3] . "\n"; //error

//Diccionario

$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
print_r($my_dict);
echo $my_dict["int"] . "\n";

//Set

array_push($my_array, "Brais");
array_push($my_array, "Brais");
print_r($my_array);
print_r(array_unique($my_array));

//Flujos

for($index = 0; $index < 10; $index++){
    echo $index . "\n";
}

foreach($my_array as $my_item){
    echo $my_item . "\n";
}

$index = 0;
while($index <= sizeof($my_array)){
    echo $my_array[$index] . "\n";
    $index++;
}

$my_int = 13;
$my_int = "hola";

if($my_int == 11 && $my_string == "hola"){
    echo "El valor de mi integer es 11\n";
}else if($my_int == 12 || $my_string == "hola"){
    echo "El valor de mi integer es 12\n";
} 
else{
    echo "El valor de mi integer no es 11\n";
}

//Funciones

function print_number(int $my_number) {
    echo $my_number . "\n";
}

print_number(10);
print_number(11);
print_number(12);


class MyClass{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$my_class = new MyClass("Kevin", 22);
print_r($my_class);
echo $my_class->name . "\n";
echo gettype($my_class) . "\n";