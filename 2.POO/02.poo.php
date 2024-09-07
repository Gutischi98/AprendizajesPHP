<?php

//Clase: una clase es un modelo que se utiliza para crear un objeto,  es decir, un conjunto de atributos y métodos que se pueden utilizar para interactuar con el los cuales heredan de su clase padre.

class Automovil
{
    //Atributos: Caracteristicas que tiene un objeto.
    public $marca;
    public $modelo;
    public $color;

    //Metodo: Funciones que controlan  el comportamiento de un objeto.

    public  function __construct($marca, $modelo, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function mostrar()
    {
        echo "<p>Hola! soy un $this->marca, modelo $this->modelo, de color $this->color</p>";
    }
}

//Objeto:
//Un objeto es una instancia de una clase, es decir, un conjunto de atributos y métodos.

$automovil1 = new Automovil("Toyota",  "Corolla", "Azul");
$automovil1->mostrar();

$automovil2 = new Automovil("Honda", "Civic",  "Rojo");
$automovil2->mostrar();
