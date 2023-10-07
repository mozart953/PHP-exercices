<?php 
    $jsonContenido ='[
        {"nombre":"Wilson", "apellido":"p"},
        {"nombre":"Vr", "apellido":"p"}
    ]';

    $resultado = json_decode($jsonContenido);
    print_r($resultado);

    foreach($resultado as $persona ){
        print_r(($persona->nombre)." ".($persona->apellido));
        // echo $resultado[$persona]."<br/>";
    }
?>