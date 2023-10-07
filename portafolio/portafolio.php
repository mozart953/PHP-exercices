<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php 

    if($_POST){
        // print_r($_POST);
        $nombre= $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        
        $fecha = new DateTime();

        $imagen =$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
        
        $imagen_temporal = $_FILES['archivo']['tmp_name'];

        move_uploaded_file($imagen_temporal, "imagenes/".$imagen);
        
        $objConexion = new conexion();
        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion'); ";
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");

    }
    if($_GET){
        //DELETE FROM `proyectos` WHERE `proyectos`.`id` = 5 
        $id=$_GET['borrar'];
        $objConexion = new conexion();

        $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` where id=".$id);
        unlink("imagenes/".$imagen[0]['imagen']);
        $sql ="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");


    }
    
    $objConexion = new conexion();
    $resultado = $objConexion->consultar("SELECT * FROM `proyectos`");
    // print_r($resultado);


?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                        <form action="portafolio.php" method="post" enctype="multipart/form-data">

                            Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                            <br/>
                            Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
                            <br/>   
                            Descripcion:
                            <textarea required name="descripcion" id="" cols="30" rows="10"></textarea>
                            <br/>

                            <input class="btn btn-success" type="submit" value="Enviar proyecto">

                        </form>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>
        </div>
        <div class="col-md-6">
                        
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php foreach($resultado as $indice){  ?>
                                            <tr class="">
                                            <td><?php echo $indice['id']; ?></td>
                                            <td><?php echo $indice['nombre']; ?></td>
                                            <td><img width=100px src="<?php echo "imagenes/".$indice['imagen'];?>" alt=""></td>
                                            <td><?php echo $indice['descripcion']; ?></td>
                                            <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $indice['id']; ?>" >Eliminar</a></td>
                                            </tr>
                                <?php }?>                          
                        
                        </tbody>
                    </table>
                </div>
        </div>
            
    </div>
</div>






  
<?php include("pie.php");?>