<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir archivos</title>
    </head>
    <body>
        <?php
        // if no esta vacio y pulsado el submit y lo filtra 
        if (filter_input(INPUT_POST, 'Subir', FILTER_SANITIZE_STRING)) {
            // funcion para ver el contenido de una variable
            var_dump($_FILES);
            // bucle por cada ficheros busca el fichero 
            foreach ($_FILES as $file) {
                // si el error es igual a 0
                if ($file['error'] == 0) {
                    // si es igual a 0 y es diferente a la ruta indicada 
                    if (!move_uploaded_file($file['tmp_name'], 'subidas/' . $file['name'])) {
                        echo "Falló";
                    }
                // si el error es diferente a 0 activa al switch
                } else {
                    switch ($file['error']) {
                        case 1:break;
                        case 2:break;
                        case 4:echo "No se ha subido archivo en el selector " . $file;
                            break;
                        case 6:break;
                        case 7:break;
                        case 8:break;
                        default:break;
                    }
                    echo "Hubo un error de código " . $file['error'] . " al subir el fichero";
                }
            }
        }
        ?>
        <!-- Formulario -->
        <form method = "post" enctype = "multipart/form-data">

            <h3>Escoge dos archivos</h3>
            <!-- El for eitqueta que lleva al primer elmento que coincida con la descripcion -->
            <label for = "archivoSeleccionado1">Seleccione archivo: </label>
            <!-- name con array y multiple value para seleccionar mas de 1 -->
            <input type = "file" name = "archivoSeleccionado1[]" id = "archivoSeleccionado1" multiple value = "" />
            <label for = "archivoSeleccionado2"><br/>Seleccione archivo: </label>
            <input type = "file" name = "archivoSeleccionado2" id = "archivoSeleccionado2" value = "" />
            <br/>
            <input type = 'submit' name = "Subir"/>
        </form>
    </body>
</html>