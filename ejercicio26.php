<?php
    class UnaClase {

        public static function unMetodo(){
            echo "Hola mundo.....!";
        }


    }

    $obj = new UnaClase();
    $obj->unMetodo();

    unaClase::unMetodo();
?>