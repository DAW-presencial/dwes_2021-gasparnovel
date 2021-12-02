<?php

/*
 * Ejemplo de qué sucede al utilizar el mismo nombre en un parámetro y en una global
 * La ubicación de la declaración global es determinante.
 * El vínculo de la variable global se produce a partir del momento de la declaración; hasta ese momento
 * se usa el valor del parámetro.
 */

// declaramos variable local
$nombre = "Juan Goitisolo";
// le pasamos a la funcion la variable Perico
function global_local($nombre)
{
    // ahora $nombre es Perico
    echo 'Parámetro_nombre: ' . $nombre;
    // declaramos una vairbale global
    global $nombre;     // a partir de aquí la variable es global.
    // ahora $nombre es Juan Goitisolo
    echo '<br/>Nombre_es_global: ' . $nombre;
     // ahora $nombre es Gumersiondo
    $nombre = "<br/>Gumersiondo<br/>";
    echo "<br/>$nombre";
}
// hace que la variable local valga Perico
global_local('Perico');
// ahora $nombre es Gumersiondo
echo $nombre;