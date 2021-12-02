<?php
    /*
    * Declaración de constantes. A partir de la versión 5.3+ podemos usar la
    * palabra clave 'const'
    * No se puede redefinir una constante.
    */

    define('PI', 3.14159);
    echo 'Usando define: ' . PI;

    const SALUDO = 'Hola mundo';
    echo '<br/>Usando const: ' . SALUDO;
?>
