<?php 
    /* 
    * Muestra las constantes __DIR__ y __LINE__ indicando qúe número de linea se asigna en el caso de un fichro
    * incluya  a otro
     * El __DIR__ muestra toda la ruta del directorio y el __LINE__ muestra en la linea que se incluye
    * en este caso la 11 de este fichero, con el include el fichero embebido.php muestra donde se inlcuye ese fichero
    */

    include 'prueba/embebido.php';

    echo "Mensaje no embebido: __DIR__ es: " . __DIR__ . '-' . __LINE__;

?>