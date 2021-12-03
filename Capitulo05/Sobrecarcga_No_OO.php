<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // funcion 
        function foo() {

            // variable que contiene una funcion que cuenta los argumentos pasados por funcion
            $numargs = func_num_args();
            // mostrar por pantalla
            echo "Número de argumentos: $numargs<br />\n";
            // condicional si el numargs es mayor o igual a 2
            if ($numargs >= 2) {
                echo "El segundo argumento es: " . func_get_arg(1) . "<br />\n";
            }
            // variable que contiene una funcion
            $arg_list = func_get_args();
            // bucle que recorre los argumentos
            for ($i = 0; $i < $numargs; $i++) {
                echo "El argumento $i es: " . $arg_list[$i] . "<br />\n";
            }
        }
        // llamamos a las funcion y le pasamos parametros
        foo(1, 2, 3);
        foo(4,5,6,7,8,9,0);
        ?>

    </body>
</html>