<?php

    // creamos un trait 
    trait Base1
    {
        public function hola($nombre)
        {
            return "Hola1: {$nombre}";
        }

        public function adios($nombre)
        {
            return "Adios1: {$nombre}";
        }

        private function prueba()
        {
            return "Esto es una prueba";
        }
    }

    // creamos un trait 
    trait Base2
    {
        public function hola($nombre)
        {
            return "Hola2: {$nombre}";
        }

        public function adios($nombre)
        {
            return "Adios2: {$nombre}";
        }

        private function nombreHorrible()
        {
            return "Voy a tener que cambiar el nombre";
        }
    }

    // creamos una clase
    class Ejemplo2
    {

        use Base1,
            Base2 {
            Base1::hola insteadof Base2;
            Base2::adios insteadof Base1;
            Base1::adios as alternativo;
            prueba as public;  //solo cambiamos visibilidad
            nombreHorrible as public cambio;  // cambiamos visibilidad y aplicamos alias
        }
    }

    // creamos un objeto
    $e = new Ejemplo2();
    echo $e->hola('Ivan') . "<br/>";
    echo $e->adios('Ivan') . "<br/>";
    echo $e->alternativo('Ivan') . "<br/>";
    echo $e->prueba() . "<br/>";
    echo $e->cambio() . "<br/>";
?>