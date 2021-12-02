<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de tabla sencilla</title>
</head>

<body>

    <h1>Estados de una variable</h1>
    <!-- tabla -->
    <table border="1">
        <tr>
            <th>Prueba</th>
            <!-- se concatena con una variable -->
            <th>Contenido de $var</th>
            <!-- comprueba si no es null -->
            <th>isset($var)</th>

        <body>
                <h1>Estados de una variable</h1>
                <!-- comprueba si es null -->
                <th>empty($var)</th>
                <!-- dice que es un booleano -->
                <th>(bool)$var</th>
                <!-- dice que es un null -->
                <th>is_null($var)</th>
        </tr>
        <?php
        // establece que errores son notificados
        error_reporting(E_ALL);
        // establece una directiva de configuracion
        ini_set('display_errors', 1);

        // funcion que crea las filas y pasa un parametro
        function crearFilasResultados($caso)
        {
            // declara variables staticas y globales
            global $var;
            static $i = 1;
            // mete en variables, html y comprobaciones
            $output = '<tr><td>' . $i++ . '</td><td>' . $caso;
            $output .= '</td><td>' . (isset($var) ? 'true' : 'false');
            $output .= '</td><td>' . (empty($var) == 1 ? 'true' : 'false');
            $output .= '</td><td>' . ((bool) $var ? "true" : "false");
            $output .= '</td><td>' . (is_null($var) ? "true" : "false");
            $output .= '</td></tr>';
            
            return $output;
        }

        $filas = "";

        // da valor a la vairable y llama a la funcion pasandole un parametro
        $var = null;
        $filas .= crearFilasResultados('$var=null');

        $var = 0;
        $filas .= crearFilasResultados('$var= 0');

        $var = true;
        $filas .= crearFilasResultados('$var= true');

        $var = false;
        $filas .= crearFilasResultados('$var= false');

        $var = "0";
        $filas .= crearFilasResultados('$var= "0"');

        $var = "";
        $filas .= crearFilasResultados('$var= ""');

        $var = "foo";
        $filas .= crearFilasResultados('$var= "foo"');

        $var = array();
        $filas .= crearFilasResultados('$var= array()');

        unset($var);
        $filas .= crearFilasResultados('unset($var)');

        $var = "1 gato";
        $filas .= crearFilasResultados('$var= "1 gato"');

        $var = "0 gatos";
        $filas .= crearFilasResultados('$var= "0 gatos"');

        $var = 9.36;
        $filas .= crearFilasResultados('$var=9.36');

        $var = "Hola Mundo";
        $filas .= crearFilasResultados('$var="Hola Mundo"');

        echo $filas;
        ?>

    </table>
</body>

</html>