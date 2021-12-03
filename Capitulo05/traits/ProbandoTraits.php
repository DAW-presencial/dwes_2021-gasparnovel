<?php

    /*
    * Ejemplos de uso de traits
    * 
    * Traits no pueden tener constantes.
    * 
    * La clausula 'use' equivale a un 'include' en cuanto al ámbito de los
    * métodos y variables protected y private.
    * 
    * Una clase que incluya un trait tiene el mismo efecto que si se copiase el 
    * trait dentro de la clase (metodos y variables).
    */

    // errores que nos pueden notificar
    error_reporting(E_ALL);

    // creamos un trait 
    trait A {
        private $a = "Luís";
        private function decirHola($name) {
            echo "Saludando a $name<br/>";
        }
    }

    // creamos un trait 
    trait B {
        use A;
        function __construct() {
            $this->decirHola('Luis');
        }
        public function decirAdios() {
            $this->decirHola('Carlos');
            echo "Despidiéndome: Adiós<br/>";
        }
    }

    // creamos una clase
    class ProbandoTraits {
        const NAME = 'Lourdes';
        use B;
    }
    // creamos una clase
    $o = new ProbandoTraits();
    // llamamos a la funcion
    $o->decirAdios();
?>#