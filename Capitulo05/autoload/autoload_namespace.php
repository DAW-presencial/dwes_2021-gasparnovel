<?php
// declaramos un namspace para no tener conflictos de clase
namespace Foobar;
// creamos una clase 
class Foo {
    // declaramos una variable
    var $mivar;
    // funcion 
    static public function test($nombre) {
        // printa 
        print '[['. $nombre .']]';
    }
}
// autocarga del namspace
spl_autoload_register(__NAMESPACE__ .'\Foo::test'); 

//muestra el contenido de la clase
var_dump(new Foo);
?>