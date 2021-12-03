<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Condicional para que si no esta vacio lo que se envie poir post que hace referencia a 'name'
        if (isset($_POST['nombre'])) {
            // Se crea la frase a mostrar 
            $output = "El nombre es: " . $_POST['nombre'];
            // Se utiliza para preservar el html 
            $output = htmlspecialchars($output);
            // Se imprime la frase
            echo $output;
        }
        ?>
        <!-- Formulario con un boton y un imput type text -->
        <form method='post'>
            <!-- Autofocus es para dejar presionado el imput type text -->
            <input type="text" name='nombre' value="" autofocus/>
            <input type="submit"/>
        </form>
    </body>
</html>