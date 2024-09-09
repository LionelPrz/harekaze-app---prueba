<?php

    class persona{
        //Atributo
        public $nombre;
        //Metodo
        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }
        //creando un metodo para imprimir los nombres
        public function imprimirNombre(){
            echo "Hola soy".$this->nombre;
        }
    }

    $objAlumno = new persona(); //Crear un objeto o instanciando un objeto
    $objAlumno -> asignarNombre("El Pibe");//Llamando un metodo
    //Impresion de los valores asignados mediante los metodos
    echo $objAlumno->nombre;
    //Usando el metodo para imprimir el nombre 
    $objAlumno->imprimirNombre();
?>