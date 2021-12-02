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

        function pOpcionales($p1, $p2) {
            echo "paramentro1: $p1";
            echo "paramentro2: $p2";
        }

        // No se pueden enviar menos parametros
        pOpcionales("Llamada 1. Enviando solo este parámetro<br/>");
        
        // Si enviamos mas de dos parametros el tercero no se muestra
        pOpcionales("Llamada 2. Enviando 3 parámetros parámetros<br/>", 
                "Segundo par. ", "Tercer parámetro<br/>");
        ?>
    </body>
</html>