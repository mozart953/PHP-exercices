<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        $suma = $valorA + $valorB;
        $resta = $valorA -$valorB;
        $multiplicacion = $valorA * $valorB;
        $division = $valorA /$valorB;
        
        echo "<br/>".$suma;
        echo "<br/>".$resta;
        echo "<br/>".$multiplicacion;
        //echo "<br/>".$division;
        if($valorB > 0){
            echo "<br/>".$division;    
        }else{
            echo "No es posible dividir entre 0";
        }
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br/>
        Valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" name="Calcular">


    </form>
</body>
</html>