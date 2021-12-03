<?php

spl_autoload_register(function ($class) {
    
    // prefijo de espacio de nombres específico del proyecto
    $prefix = 'Foo\\Bar\\';

    // directorio base para el prefijo del espacio de nombres
    $base_dir = __DIR__ . '/src/';

    // ¿la clase usa el prefijo del espacio de nombres?
    // obtiene la longitud del string 
    $len = strlen($prefix);
    // compara si estos strings son diferentes a 0
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, pasar al siguiente cargador automático registrado
        return;
    }

    // obtener el nombre de la clase relativa
    $relative_class = substr($class, $len);

    // reemplaza el prefijo del espacio de nombres con el directorio base, reemplaza el espacio de nombres
    // separadores con separadores de directorio en el nombre de la clase relativa, anexar
    // con .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // si el archivo existe, solicítelo
    if (file_exists($file)) {
        require $file;
    }
});

// funcion que intenta cargar una clase sin definir
function __autoload($class) {
    echo "Llamando __autoload para $class";
}

// Registrar las funciones dadas como implementación de __autoload()
spl_autoload_register('__autoload');

// clase persona
class Persoa {
    // constructor
    function __construct() {
        echo "Instanciando Persona";
    }

}

// instanciamos un objeto Persoa
$o = new Persoa;

?>