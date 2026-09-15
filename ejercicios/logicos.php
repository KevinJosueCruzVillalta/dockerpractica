<?php

//Operadores logicos AND
var_dump(true && true); //true
echo "<hr>";
var_dump(true && false); //false
echo "<hr>";
var_dump(false && true); //false
echo "<hr>";
var_dump(false && false); //false

//Operadores logicos OR
var_dump(true || true); //true
echo "<hr>";
var_dump(true || false); //true
echo "<hr>";
var_dump(false || true); //true
echo "<hr>";
var_dump(false || false); //false
echo "<hr>";

//Operadores logicos XOR
var_dump(true xor true); //false
echo "<hr>";
var_dump(true xor false); //true
echo "<hr>";
var_dump(false xor true); //true
echo "<hr>";
var_dump(false xor false); //false
echo "<hr>";

//Operadores logicos NOT o negacion
var_dump(!true); //false
echo "<hr>";
var_dump(!false); //true
echo "<hr>";

?>