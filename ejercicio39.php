<?php 
    $nombreArchivo="archivo2.txt";
    $contenidoArchivo ="Hola Saludos!";

    $archivoACrear = fopen($nombreArchivo,"w");

    fwrite($archivoACrear, $contenidoArchivo);
    fclose($archivoACrear);
?>