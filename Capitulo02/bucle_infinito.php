<!doctype html>
<!--
Ejemplo de bucle infinito
¿Qué sucede si ejecutamos este script? Sucede que el ordenador recibe demasiadas iteraciones
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i = 0;
        for (; true;) {
            echo "Iteración " . $i++;
        }
        ?>
    </body>
</html>