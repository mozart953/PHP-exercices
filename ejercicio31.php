<?php
    $rdgLenguaje = "";

    $txtNombre = "";

    $chkphp="";
    $chkhtml="";
    $chkcss="";

    $lsAnime="";

    $txtComentario="";


    if($_POST){
        $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
        $chkphp = (isset($_POST['chkphp']) && $_POST['chkphp'] == "si") ? "checked" : "";
        $chkhtml = (isset($_POST['chkhtml']) && $_POST['chkhtml'] == "si") ? "checked" : "";
        $chkcss = (isset($_POST['chkcss']) && $_POST['chkcss'] == "si") ? "checked" : "";

        $lsAnime =(isset($_POST['lsAnime']))?$_POST['lsAnime']:"";
        
        $txtComentario = (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";
        print_r($lsAnime);

        //print_r($rdgLenguaje);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        if($_POST){
            echo "<strong>Hola</strong> ".$txtNombre;
            echo "<br/>"."<strong>Tu lenguaje es: </strong>".$rdgLenguaje;
            echo "<br/>"."<strong>"."Tu lenguaje es: "."</strong>";
            echo "<br/><strong>Tu lenguaje es:</strong>";
            if ($chkphp == "checked") {
                echo " PHP";
            }
            if ($chkhtml == "checked") {
                echo " Html";
            }
            if ($chkcss == "checked") {
                echo " CSS";
            }
            echo "<br/>"."<strong>"."Tu lenguaje es: "."</strong>";
            echo $lsAnime."<br/>";
            echo "<strong>"."Tu mensaje es: "."</strong>".$txtComentario;
        }
        
    ?>

    <form action="ejercicio31.php" method="post">
        Nombre:<br/>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br/>
        Te gusta?:<br/>
        <br/>php <input type="radio" <?php echo($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""></br>
        <br/>html <input type="radio" <?php echo($rdgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id=""></br> 
        <br/>css <input type="radio" <?php echo($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""></br>

        Estas aprendiendo.... <br/>
        <br/>php:<input type="checkbox" <?php echo $chkphp;?>name="chkphp" value="si" id="">
        <br/>html:<input type="checkbox" <?php echo $chkhtml;?>name="chkhtml" value="si" id="">
        <br/>css:<input type="checkbox" <?php echo $chkcss;?>name="chkcss" value="si" id="">
        <br/>

        ¿Que anime te gusta?...<br/>
        <select name="lsAnime" id="" >
            <option value="">[Ninguna serie]</option>
            <option value="naruto" <?php echo($lsAnime=="naruto")?"selected":"";?>>Naruto</option>
            <option value="bleach" <?php echo($lsAnime=="bleach")?"selected":"";?>>Bleach</option>
            <option value="dragon" <?php echo($lsAnime=="dragon")?"selected":"";?>>Dragon Ball</option>

        </select>
        <br/>

        ¿Tienes alguna duda?<br/>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario;?>
        </textarea>
        <br/>

        <input type="submit" value="Enviar informacion">
    </form>
    
</body>
</html>