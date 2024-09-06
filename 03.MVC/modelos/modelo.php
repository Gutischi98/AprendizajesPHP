<?php

    class EnlacesPaginas{

        static function enlacesPaginasModelo($enlacesModel){

            if($enlacesModel == "ingreso" ||
                $enlacesModel =="registro"||
                $enlacesModel =="inicio"){

                    $modelo = "paginas/".$enlacesModel.".php";
                }
                
            return $modelo;

    }
}


?>