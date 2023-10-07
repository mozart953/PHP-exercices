<?php
    $frutas1 = array("f"=>"fresa", "m"=>"manzana", "p"=>"pera");
    $frutas = array("fresa", "manzana", "pera");
    print_r($frutas);

    echo "</br>".$frutas[2];
    echo "</br>".$frutas1["f"];

    for($indice=0;$indice<=2;$indice++){
        echo "</br>".$frutas[$indice];
    }

    

    foreach($frutas1 as $indice1=>$valor){
        echo "</br>".$frutas1[$indice1];
    }
?>