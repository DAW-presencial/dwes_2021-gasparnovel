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

// ¿Podemos pasar una referencia como parámetro de función si el parámetro no fue definido como ref?
        function pasoPorReferencia($a) {
            $a*=2;
            $d = "Dede dentro vale $a*2";
            return $d;
        }

        $b = 3;
        // No se puede pasar por referencia sino se ha definido previamente
        $c = pasoPorReferencia(&$b);
        echo "Desde fuera b vale $c";
        // Dará un "Fatal error"
        ?>
    </body>
</html>