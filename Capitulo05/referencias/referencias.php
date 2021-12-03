<?php

    namespace referencias;

    /*
    * Cual es la diferencia entre un identificador y una referencia?
    * ¿Nombre y su valor(referencia)?
    */

    // creamos clase 
    class A {
        public $foo = 1;
    }
    // creamos objeto 
    $a = new A;
    // $a y $b son copias del mismo identificador
    $b = $a;     
    $b->foo = 2;
    $a->foo = 3;
    echo 'Ejemplo1: ' . $a->foo . "\n";
    
    // creamos objeto 
    $c = new A;
    // $c y $d son referencias
    $d = &$c;   
    $d->foo = 2;
    echo 'Ejemplo2: ' . $c->foo . "\n";

    $e = new A;
    function foo($obj) {
        $obj->foo = 2;
    }
    foo($e);
    echo 'Ejemplo3: ' . $e->foo . "\n";
?>