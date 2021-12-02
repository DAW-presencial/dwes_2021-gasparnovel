<!doctype html>
<!-- Ejemplo de formulario con validación de campos, y que conserva el valor de los campos validados entre 
peticiones sucesivas no validadas.  Emplea filter_input con filtros de validación pero no sanitiza.
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
    // Variable que se reciben por formulario
    $nombre = '';
    $edad = '';
    $email = '';
    // array() que guardará los errores
    $errores_array = []; 
    // si no esta vacio y se pulsa submit
    if (isset($_GET['submit'])) {
        // filtra el imput con imput_get y llama a la funcion de validar
        $nombre = filter_input(INPUT_GET, 'nombre', FILTER_CALLBACK, array('options' => 'validarNombre'));
        $edad = filter_input(INPUT_GET, 'edad', FILTER_CALLBACK, array('options' => 'validarEdad'));
        // email tiene una funcion de php que valida
        $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

        // email se valida pero no es obligatorio.
        if ($email === FALSE && is_null($email)) {
            $errores_array[] = "EMAIL: introduzca un correo válido";
        }
        // si es diferente a la cuenta de errores ha pasado la validación
        if (!count($errores_array)) { 
            echo "Validación superada- Los datos introducidos son: $nombre, $edad y $email";
        //no ha pasado la validación
        } else { 
            echo "Validación Falló:<br/>";
            // llama a displayForm dandole los errores
            displayForm($errores_array);
        }
    // si esta vacio llama a la funcion dandole errores
    } else {
        displayForm($errores_array);
    }

    // funcion valdiar nombres 
    function validarNombre($nombre)
    {
        // llama a la variable global 
        global $errores_array;
        // guarda la variable pasada por parametro sin espacios
        $nombre = trim($nombre);
        // si es string y la cuenta de caracteres es mayor que 2
        if (is_string($nombre) && (strlen($nombre) > 2)) {
            return $nombre;
        }
        // sino mete en el array un error y devuelve vacio
        $errores_array[] = "Nombre: debe tener al menos 2 caracteres alfanuméricos";
        return '';
    }
    // llama a la funcion 
    function validarEdad($edad)
    {
        // llama a la variable global 
        global $errores_array;
        // si edad es int y esta entre 1 y 140
        if (is_numeric($edad) && ($edad >= 1 && $edad <= 140)) {
            return $edad;
            // sino guarda el error y devuelve vacio
        } else {
            $errores_array[] = "EDAD: debe estar en el rango 1 a 140";
            return '';
        }
    }
    // llama a la funcion 
    function displayForm($errores)
    {
        // llama a las variables globales 
        global $nombre, $edad, $email;
        // si la cuenta de los errores es true 
        if (count($errores)) {
            // recorre los errores mostrando cada error
            foreach ($errores as $error) {
                echo "<br/>$error";
            }
            // muestra en codificaion json los errores 
            echo  '<br/>Codificación JSON: ' . json_encode($errores);
        } 
        // sino muestra el formulario
        else
        {
        ?>
            <h1>Registro de usuario</h1>
            <form>
                <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>" />
                <input type="text" name="edad" placeholder="Edad" value="<?= $edad; ?>" />
                <input type="text" name="email" placeholder="email" value="<?= $email; ?>" />
                <input type="submit" name="submit" />
            </form>
        <?php
        }
    }
    ?>
</body>

</html>