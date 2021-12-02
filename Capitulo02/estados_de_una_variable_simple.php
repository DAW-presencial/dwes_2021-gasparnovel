<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo de tabla sencilla</title>
    </head>

    <body>

        <h1>Estados de una variable</h1>

        <table border='1'>
            <!-- tabla -->
            <tr>
                <th>Prueba</th>
                <th>Contenido de $var</th>
                <th>isset($var)</th>
                <th>empty($var)</th>
                <th>(bool)$var</th>
            </tr>
            <?php
            // array  que guarda las funciones 
            $fun = ['esta_configurada', 'esta_vacia', 'conversion_a_bool'];
            // array que contiene un array de cada fila
            $valores = [
                ['$var= null', null],
                ['$var= 0', 0],
                ['$var= true', TRUE],
                ['$var= false', FALSE],
                ['$var= "0"', "0"],
                ['$var= ""', ""],
                ['$var= "foo"', "foo"],
                ['$var= array()', array()],
                ['$var=9.36', 9.36]
            ];
            // establece que errores son notificados
            error_reporting(E_ALL);
            // establece una directiva de configuracion
            ini_set('display_errors', 1);
            // funcion que pasa por parametro
            function esta_configurada($var)
            {   // devuelve una variable no vacia
                return isset($var);
            }
            // funcion que pasa por parametro
            function esta_vacia($var)
            { // devuelve una variable vacia
                return empty($var);
            }
            // funcion que pasa por parametro
            function conversion_a_bool($var)
            {   //funcion que convierte en booleano
                return (bool) $var;
            }
            // funcion que crea las filas y pasa por parametro dos variables
            function crearFilaResultados($caso, $var)
            {   // llama a la variable global y declara que una en estatica
                global $fun;
                static $i = 1;
                // salida 
                $output = '<tr><td>' . $i++ . '</td><td>' . $caso;
                for ($c = 0; $c < count($fun); $c++) {
                    $output .= '</td><td>' . (($fun[$c]($var)) ? 'true' : 'false');
                }
                $output .= '</td></tr>';
                echo $output;
            }
            // bucle que recorre todo el array de arrays sustituyendo la clave y valor
            foreach ($valores as list($caso, $valor))
                crearFilaResultados($caso, $valor);
            ?>

        </table>
    </body>
</html>