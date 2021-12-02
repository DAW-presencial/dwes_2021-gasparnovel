<!doctype html>
<!--
Distintos ejemplos sobre arrays
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body class='container'>
        <?php 
        // creando matrices 
            echo '<h2>Creado matrices de índice numérico</h2>';
            $matriz1 = array();
            var_dump($matriz1);

            echo '<h2>Inicializando matrices de índice numérico</h2>';
            $mimatriz = array(0 => 1, 1 => 2);
            var_dump($mimatriz);
        // o bien se puede hacer (FORMA MÁS ÚTIL)
        $mimatriz = array(1,2);
        var_dump($mimatriz);

        // o bien se puede hacer 
        $mimatriz[0] = 1;
        $mimatriz[1] = 2;

        echo '$mimatriz(0)=1;';
        var_dump($mimatriz);


        //Recorriendo matrices 
        foreach ($mimatriz as $key => $value) {
            echo "El valor del elemento $key es $value <br/>";
        }

        // Tambien podemos mostrar solo el valor de la matriz
        foreach ($mimatriz as $value) {
            echo "El valor es $value <br/>";
        }

        // Creando matrices de índice asociativo 
        echo '<h2>Creando matrices de índice asociativo</h2>';
        $alumnos = array('Toni' => 24, "Vicky$$mimatriz[0]" => 32, 'Gaspar' => 27);
        var_dump($alumnos);

        echo '<p>Añadiendo un índice númerico<br/>';
        $alumnos[] = 'Periquito';
        var_dump($alumnos);

        //Casos especiales
        echo '<h2>Casos especiales de índice</h2>';
        $especial["8"] = 'índice es un string "8", conversion a entero 8';
        $especial["08"] = 'índice es un string 08';
        $especial["O8"] = 'índice con letra O mayúscula, un string O8';
        $especial[null] = 'índice nulo';
        var_dump($especial);

        //ARRAYS MULTIDIMENSIONALES 
        echo '<h2>Arrays multidimensionales</h2>';
        $matriculas = array(
        'Levi' => array()
        );
        var_dump($matriculas);

        echo '<h2>Arrays multidimensionales .- matriculas</h2>';
        $matriz = array(
            array(3, 5, 7),
            array(8, 6, 4), 
            array(1, 9, 2)
        ); 
        var_dump($matriz);

        echo '<h2>Arrays animales</h2>';
        $animales = array(
            "altura" => "Gato", 
            "peso" => 44, 
            "Jirafa" => "Jirafa"
        );
        var_dump($animales);

        // Formas de imprimir variables
        echo '<h2>Formas de imprimir variables</h2>';
        $variable = "nombre";
        $literal1 = 'Mi $variable no se imprimirá </br>';
        $literal2 = 'Mi $variable no se imprimirá </br>';

        echo $variable . ' ' . $literal1 . ' ' . $literal2;

        $multilinea = "Esto es una cadena
        multilínea, aunque si usas un IDE, tenderá a
        provocar una concatenación por línea.
        Pruébalo en tu IDE.";
        echo $multilinea;
        ?>
    </body>
</html>
