<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tabla de Multiplicar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
    h3 {
        text-decoration: underline;
    }
    </style>
    
    <body>
        <h1>Tabla de Multiplicar</h1>
    <?php

        //Array que guarda 10 tablas
        $tables = [0,1,2,3,4,5,6,7,8,9,10];

        /*Bucle que recorre las tablas y por cada tabla y printa el título y la tabla
        *Luego con un bucle for va printando la posición, la tabla y la multiplicación de la tabla por posición
        */
        foreach ($tables as $table){
            echo "<table><h3>Tabla del $table</h3><table>";
            for ($i=0;$i<=10;$i++){
                echo "<tr>
                        <td>".$i."</td>
                        <td>X</td>
                        <td>".$table."</td>
                        <td>=</td>
                        <td><b>".($i*$table)."</b></td>
                    </tr>";
            }
        }
    ?>
    </body>
</html>