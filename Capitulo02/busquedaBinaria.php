<!doctype html>
<!--
Ejercicio Capítulo 2.- Búsqueda binaria (o dicotómica)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        // establece cuales errores son notificados
        error_reporting(E_ALL);
        // variables
        $lista_ordenada = array(2, 4, 16, 35, 46, 63);
        $min = 0;
        // cueenta la longitud de la lista -1
        $max = count($lista_ordenada) - 1;
        $buscado = -20;
        // mientras sea entre el minimo y el la cuenta de la lista -1
        while ($min <= $max) {
            // central es el numero de enmdedio de la lista
            $central = (int) (($min + $max) / 2);
            // si el numero buscado es mayor que el numero central
            if ($buscado > $lista_ordenada[$central]) {
                $min = $central + 1;
            // si el numero buscado es menor que el numero central
            } elseif ($buscado < $lista_ordenada[$central]) {
                $max = $central - 1;
            // si el numero buscado es igual que el numero central
            } elseif ($buscado == $lista_ordenada[$central]) {
                break;
            }
        }
        // si el numero buscado es igual que el numero central
        if ($buscado == $lista_ordenada[$central]) {
            echo "El número $buscado está en la posición $central";
        } else {
            echo "El número $buscado no está en la lista";
        }
        ?>
    </body>
</html>