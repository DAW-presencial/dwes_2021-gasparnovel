<?php

namespace referencias;

/*
 * Demuestra que la igualdad no estricta entre objetos, '==', compara valores públicos, privados y protegidos
 */

 // declaramos la clase 
        class A
        {
            // declaramos e instanciamos variables
            public $a = 1;
            protected $b = 2;
            private $c = 3;

            // funcion que mete valor en b
            function set_b($b)
            {
                $this->b = $b;
            }
            // funcion que coge valor en b
            function get_b()
            {
                return $this->b;
            }
            // funcion que mete valor en c
            function set_c($b)
            {
                $this->c = $b;
            }
            // funcion que coge valor en c
            function get_c()
            {
                return $this->c;
            }
            // funcion magica que se ejecuta al escribir sobre datos inaccesibles
            function __set($name, $valor)
            {
                $this->${$name} = $valor;
            }
        }
        // creamos nuevos objetos
        $obj1 = new A;
        $obj2 = new A;
        $obj2->set_c(2);

        // si los dos objetos son iguales pero no estrictos y no lo son
        if ($obj1 == $obj2) {
            echo "Igualdad no estricta<b/>";
        } else {
            echo "los objetos no son iguales en valores<b/>";
        }
        // si los dos objetos son iguales estrictos no lo son
        if ($obj1 === $obj2) {
            echo "<br/>Igualdad estricta<b/>";
        } else {
            echo "<br/>No son estrictamente iguales<b/>";
        }

        // si los dos objetos son iguales estrictos y ahora si lo son
        $obj2 = $obj1;
        if ($obj1 === $obj2) {
            echo "<br/>Ahora son Igualdad estricta<b/>";
        } else {
            echo "<br/>No son estrictamente iguales<b/>";
        }
?>
