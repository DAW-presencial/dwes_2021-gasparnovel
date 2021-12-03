<?php
// funcion que autogarga 
spl_autoload_register(function ($pajaro){
    // incluye un fichero
    include 'clases/' . "$pajaro" . ".php";
});

spl_autoload_register(function ($persona) {
    include  'clases/' . "$persona" . ".php";
});

// crea objetos
$obj  = new Persona();
$obj2 = new Pajaro();
// carga la clase de persona
$obj ->cargarClase();
?>