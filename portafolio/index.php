<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php 
     $objConexion = new conexion();
     $resultado = $objConexion->consultar("SELECT * FROM `proyectos`");
?>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div
                class="h-100 p-5 text-white bg-primary border rounded-3">
                <h2>Bienvenid@s</h2>
                <p>Este es un portafolio</p>
                
            </div>
        </div> 
    </div>

 

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($resultado as $indice){?>
    <div class="col">
    <div class="card h-100">
      <img src="<?php echo "imagenes/".$indice['imagen'];?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $indice['nombre']; ?></h5>
        <p class="card-text"><?php echo $indice['descripcion']; ?></p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

<?php } ?>
  


</div>
                                                  

<?php include("pie.php");?>