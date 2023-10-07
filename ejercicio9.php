<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        $valorP=0;

        if($valorA > $valorB){
            echo "El valor de A es mayor que el de B";
        }else{
            echo "El valor de B es mayor que el de A";
        }


        while ($valorP<10){
            echo "<br/>"."valor: ".$valorP;
            $valorP++;
        }

        for($val=0;$val<15;$val++){
               echo "<br/>"."valor2: ".$val;
               
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
    
    <form action="ejercicio9.php" method="post">
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