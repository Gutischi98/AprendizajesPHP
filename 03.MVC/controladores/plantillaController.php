<?php

class ControladorPlantilla
{
    //llamada a la plantilla.
    public function ctrlTraerPlantilla()
    {

        include "vistas/plantilla.php";
    }

    //interaccion del usuario
    public function ctrlEnlacesPaginas()
    {
        $enlacesController = $_GET["action"];


        $respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesController);

        include $respuesta;
    }
}
