<?php

// funcion de autocarga
function __autoload($class) {
    
}

// funcion 
function my_loader($nomclase) {
    // si existe el fichero 
    if (file_exists("clases/$nomclase.php"))
    // incluyelo 
        include "clases/$nomclase.php";
}
// funcion que incluye 
function your_loader($nomclase) {
    include "clases2/$nomclase.php";
}

// vemos que funcion hay en autocarga en este caso __autoload
var_dump(spl_autoload_functions());
echo '<br/>';

// metemos las funciones
spl_autoload_register('my_loader');
spl_autoload_register('your_loader');

// vemos que funcion hay en autocarga en este caso my_loader && your_loader
var_dump(spl_autoload_functions());

// instanciamos un nuevo obj
$obj = new Persona2();

// vemos que contiene
var_dump($obj);

// vemos todas las spl_classes
var_dump(spl_classes());