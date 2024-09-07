<?php

//Codigo imperativo o espagueti
$automovil1 = (object)["marca" => "Toyota",  "modelo" => "Corolla", "color" => "Azul"];
$automovil2 = (object)["marca" => "Honda",  "modelo" => "Civic",  "color" => "Rojo"];

function  mostrarAutomovil($automovil)
{
    echo "<p>Hola soy un $automovil->marca, modelo $automovil->modelo, soy de color $automovil->color<br></p>";
}

mostrarAutomovil($automovil1);
mostrarAutomovil($automovil2);
