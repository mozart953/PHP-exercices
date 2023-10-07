<?php

class Persona {
    public $nombre;
    private $edad;
    protected $altura;

    function _construct($nuevoNombre1){
        $this->nombre=$nuevoNombre1;
    }



    public function asignarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre() {
        echo "Hola soy " . $this->nombre;
    }

    public function mostrarEdad() {
        $this->edad = 30;
        return $this->edad;
    }
}

// class Trabajador extends Persona {
//     public $puesto;

//     public function presentarseComoTrabajador() {
//         echo "Hola mundo, soy " . $this->nombre . " y me desempeño como " . $this->puesto;
//     }
// }

$objAlumno = new persona("Wilson");
$objAlumno->imprimirNombre();
// $objTrabajador = new Trabajador();
// $objTrabajador->asignarNombre("Isaac Newton");
// $objTrabajador->puesto = "Programador";

// $objTrabajador->presentarseComoTrabajador();

// $objAlumno = new Persona();
// $objAlumno->asignarNombre("Wilson");

// $objAlumno2 = new Persona();
// $objAlumno2->asignarNombre("Victor");

// $objAlumno2->imprimirNombre();

// echo $objAlumno2->nombre;

// echo $objAlumno->nombre;

//echo $objAlumno2->altura; // Error: la propiedad altura es protegida y no se puede acceder desde fuera de la clase
?>
