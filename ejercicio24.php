<?php
    class persona{
        public $nombre;

        private $edad;
        protected $altura;
        

        public function asignarNombre($nuevoNombre){
            $this->nombre=$nuevoNombre; 
        }

        public function imprimirNombre(){
            echo "Hola soy ".$this->nombre;
        }

        public function mostrarEdad(){
            $this->edad=30;
            return $this->edad;
        }

    }


    $objAlumno = new persona();
    $objAlumno->asignarNombre("Wilson");

    $objAlumno2 = new pesona();
    $objAlumno2->asignarNombre("Victor");

    $objAlumno2->imprimirNombre();

    echo $objAlumno2->nombre;
    echo mostrarEdad();

    echo $objAlumno->nombre;

    echo $objAlumno2->altura;
   
?>