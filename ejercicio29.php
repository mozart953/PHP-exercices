<?php
    $servidor="localhost:3307";
    $usuario="root";
    $contrasena="";

    try{

        $conexion= new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
        $sql = "SELECT * FROM `fotos`"; 

        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado=$sentencia->fetchAll();

        //print_r($resultado);

        foreach($resultado as $foto){
            print_r($foto['nombre']."</br>");

        }

        echo "Conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea ".$error;

    }


?>