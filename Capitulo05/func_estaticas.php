<?php

/*
 * ¿Se puede llamar a un método static desde un método de instancia?
 * Y desde un método de instancia ¿se puede llamar a un método static?
 * 
 * Compruébalo añadiendo una llamada a un método de instancia desde un método static
 */

class prueba {
    // funcione static
    static function verNombre($nombre) {
        echo "<br/>El nombre es: $nombre";
    }
    // constructor
    function __construct() {
        prueba::verNombre("toni");
    }

}
// nuevo objeto que llama al contructor
$obj = new prueba();
// llama al contructor y le cambia el nombre
prueba::verNombre(" rafael");