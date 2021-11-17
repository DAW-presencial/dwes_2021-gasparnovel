<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Algoritmo Burbuja</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        <h1>Algoritmo Burbuja</h1>
    <?php
    //Array donde guardaremos los números aleatorios
    $array = [];

    /*Mientras que la cuenta la longitud del array es menor a 10
    *se guarda en la variable numeroRandom un número de 0 a 100
    *y con la funcion array_push se guarda en el array creado el número random creado
    */

    while(count($array) < 10) {
        $numeroRandom = rand(0, 100);
        array_push($array, $numeroRandom);
    }

    //Printa gracias al bucle todos los numeroRandom del array desordenado
    echo "<p><b>Array desordenado de los 10 números generados aleatoriamente:</b></p>";
    foreach ($array as $numeroRandom){
        echo "$numeroRandom ";
    }

    //Printa el siguiente texto
    echo "<p><b>Resultado del array con los números ordenados de menor a mayor:</b></p>";
    
    /*Bucle donde la variable i es menor que la longitud del bucle
    *Bucle donde la variable j nos permite observar el número de iteraciones
    *Condicional, si el número de iteraciones es mayor al número siguiente
    *Creamos la variable k con erl número de j
    *Cambiamos los valores de j con los el número siguiente
    * Cambiamos los valores de j+1 con los de k
    */

    for ($i=0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array)-1; $j++) {
            if ($array[$j] > $array[$j+1]) {
                $k = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j + 1] = $k;
            }
        }
    }

    //Printa gracias al bucle todos los numeroRandom del array ordenado
    foreach ($array as $numeroRandom){
        echo "$numeroRandom ";
    }
    ?>
    </body>
</html>