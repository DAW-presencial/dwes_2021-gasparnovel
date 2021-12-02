<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <title>Adivina mi número</title>
        <link rel="stylesheet" type="text/css" href="Ejemplos_de_formularios/common.css" />
    </head>
    <body>
        <?php

        /**
         * Examen 1ª evaluación. Solución al ejercicio 5. Fecha examen 20151202
         * 
         * Adivina un número. El jugador debe adivinar un número generado aleatoriamente en un
         * número limitado de intentos. En cada intento el programa informa si el número introducido
         * es mayor o menor que el número buscado.
         * 
         * Conservación de la información realizada con campos ocultos en el formulario.
         *            $size = N;
        *  $numero_correcto= rand(1,MAX);
         * Contiene algunos atributos HTML5
         */

        
        // Definimos las constantes MINIMO y MAXIMO
        define('MINIMO', 1);
        define('MAXIMO', 20);
        // Definimos una constante con el MAX_INTENTOS
        define('MAX_INTENTOS', 5);
        // Escribimos el título
        echo "<h1>Adivina mi número (Entre " . MINIMO . ' y ' . MAXIMO . ')</h1>';
        // Condicional si se ha pulsado y si no esta vacio sera_este
        if (isset($_POST["submitButton"]) and isset($_POST["sera_este"]))
        {
            processForm();
        }
        else
        {
            displayForm(rand(MINIMO, MAXIMO));
        }

        // Funcion que procesa la funcionalidad el juego
        function processForm()
        {
            // $adivina  Número generado aleatoriamente y que debe ser adivinado.
            $adivina = (int) filter_input(INPUT_POST, "adivina", FILTER_VALIDATE_INT);
            // $intentos Número de intentos aún disponibles para el jugador.
            $intentos = (int) $_POST["intentos"] - 1;
            // $sera_este  Número que se introduce en el formulario.
            $sera_este = (int) $_POST["sera_este"];

            // si sera_este y advinia son iguales llama a la funcion displaySuccess
            if ($sera_este == $adivina)
            {
                displaySuccess($adivina);
            }
            // si intentos es igual a 0 llama a la funcion displayFailure
            elseif ($intentos == 0)
            {
                displayFailure($adivina);
            }
            // si sera_este es mas bajo que advinia llama a la funcion displayForm con ciertos parametros
            elseif ($sera_este < $adivina)
            {
                displayForm($adivina, $intentos, "Demasiado bajo - ¡Prueba otra vez!");
            }
            // si sera_este es mas alto que advinia llama a la funcion displayForm con ciertos parametros
            else
            {
                displayForm($adivina, $intentos, "Demasiado alto - ¡Prueba otra vez!");
            }
        }

        /**
         * 
         * @param int $adivina  Número generado aleatoriamente y que debe ser adivinado.
         * @param int $intentos Número de intentos aún disponibles para el jugador.
         * @param int $mensaje  Informa si se pasó o se quedó corto en el intento.
         */

        // Funcion que muestra el formulario
        function displayForm($adivina, $intentos = MAX_INTENTOS, $mensaje = "")
        {
            ?>
            <form method="post">
                <div>
                    <!-- hay dos imputs ocultos pero almacenan informacion -->
                    <input type="hidden" name="adivina" value="<?php echo $adivina ?>" />
                    <input type="hidden" name="intentos" value="<?php echo $intentos ?>" />
                    <!-- Si hay mensaje lo muestra -->
                    <?php if ($mensaje) echo "<p>$mensaje</p>" ?>
                    <!-- Muestra los campos a rellanar con los mensajes -->
                    <p>¡Tienes <?php echo $intentos ?> 
                        <?php echo ( $intentos == 1 ) ? "intento" : "intentos" ?> para adivinarlo!</p>
                    <!-- Muestra los campos a rellanar con los mensajes -->
                        <p>¿Cuál crees que es? 
                        <input type="number" name="sera_este" value="" autofocus required min="<?php echo MINIMO; ?>" 
                            max="<?php echo MAXIMO; ?>" style="float: none; width: 3em;" />
                        <input type="submit" name="submitButton" value="Intentar" style="float: none;" /></p>
                </div>
            </form>
            <?php
        }

        /**
         * 
         * @param int $adivina Ver definición en función displayForm.
         */
        // Funcion que si ha funcionado muestra lo siguiente 
        function displaySuccess($adivina)
        {
            ?>
            <h2>¡Enhorabuena!</h2>
            <p>Has adivinado mi número: <?php echo $adivina ?>!</p>

            <form action="" method="post">
                <p><input type="submit" name="OtroJuego" value="Otro juego" autofocus style="float: none;" /></p>
            </form>
            <?php
        }

        /**
         * 
         * @param int $adivina  Ver definición en función displayForm.
         */

        // Funcion que si no ha funcionado muestra lo siguiente 
        function displayFailure($adivina)
        {
            ?>
            <h2>¡Mala suerte!</h2>
            <p>Has agotado los intentos. ¡Mi número era el <?php echo $adivina ?>!</p>

            <form action="" method="post">
                <p><input type="submit" name="OtroJuego" value="Otro juego" autofocus style="float: none;" /></p>
            </form>
            <?php
        }
        ?>
    </body>
</html>