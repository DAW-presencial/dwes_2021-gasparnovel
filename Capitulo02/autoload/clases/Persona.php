<?php
class Persona {
    private $nombre = "Jose";
    private $apellido= "Garcia";

    function __construct() {
        echo "Instanciando a una persona";
    }

    function cargarClase(){
        echo   "Me dicen que soy una persona";
    }
}
