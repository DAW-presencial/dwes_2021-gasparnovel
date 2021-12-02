<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        // funcion con parametros iniciales
        function paramDefault($param1, $param2 = 0, $param3 = "Hola Mundo") {
            echo "P1: $param1, ";
            echo "P2: $param2, ";
            echo "P3: $param3<br/>";
        }
        // se sustituye el primer parametro 
        paramDefault(1);
        // se sustituye el primer parametro y segundo
        paramDefault(2, 4);
        // se sustituye todos los parametros
        paramDefault(3, 4, "Otra cadena");
        $a="Veamos";

        echo "<br/><p>Anadiendo valores null</p>";
        // se sustituye a null o los valores segun 
        paramDefault(4, null, "Otra cadena");
        paramDefault(5, null, null);
        // funcion que recupera los parametros iniciales
        $f = new ReflectionParameter('paramDefault', 'param2');
        // se muestran los parametros iniciales a partir del segundo parametro 
        paramDefault(6, $f->getDefaultValue());
        ?>
    </body>
</html>