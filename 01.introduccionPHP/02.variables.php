<?php

//variable numerica:
$numero = 14;
echo "Mi numero es: $numero <br>";
var_dump($numero);
echo "<br>";


//variable de texto:
$palabra = "palabra";
echo "Mi palabra es: $palabra <br>";
var_dump($palabra);
echo "<br>";


//boolean
$verdadero = true;
echo  "Mi boolean es: $verdadero <br>"; //si es verdadero  muestra 1, si es falso muestra 0.
var_dump($verdadero);
echo "<br>";


//array:
$colores = array("rojo", "amarillo", "morado");
$coloresString = implode(',', $colores); //Implode(): metodo para transformar  un array en un string. Se utiliza para concatenar los elementos del array. requiere de dos argumentos, los cuales son(Como concatenar (coma, espacio, punto), $variableArray).
echo "<br>";
var_dump($colores);
echo "<br>";
echo "los colores son: $coloresString <br>";
echo "mi color favorito es $colores[2] <br>";


//Variable tipo diccionario:
$verduras = array("verdura1"=> "lechuga",  "verdura2"=>"pimiento",  "verdura3"=>"tomate");
$verdurasString = implode(", ", $verduras); //Tambien  se puede utilizar el metodo implode() para transformar un array tipo diccionario en un string.
echo "<br>";
var_dump($verduras);
echo "<br>";
echo "mi verdura favorita es: $verduras[verdura3]<br>";
echo "el listado de las verduras es: $verdurasString<br>";
echo "<br>";


//Objeto:
$frutas = (object)["fruta1"=>"pera",  "fruta2"=>"manzana", "fruta3"=>"naranja",  "fruta4"=>"fresa"];
echo "mi fruta favorita es: $frutas->fruta3 <br>";
var_dump($colores);
echo "<br>";

//Metodo var_dump: muestra  la estructura de la variable, incluyendo el tipo de dato y el contenido.



?>