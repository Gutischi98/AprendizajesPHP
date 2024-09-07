<?php


//funcion sin parametros:
function saludo()
{
    echo "Hola a todos!<br>";
}
saludo();


//funcion con parametros:
function despedida($adios)
{
    echo "Adios $adios<br>";
}
despedida("a todos");


//funcion con retorno:
function suma($a, $b)
{
    return $a + $b;
}
echo suma(1, 5);
