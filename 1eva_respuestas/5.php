<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>

    <body>
        <!-- Títulos -->
        <h1>Formulario</h1>
        <h2>Inserta los datos</h2>
        <!-- Formulario -->
        <form method="POST" enctype="multipart/form-data">

            <label>Nombre: </label>
            <input type="text" name="nombre"><br>
        
            <label>Apellido: </label>
            <input type="text" name="apellido"><br>
            
            <label>Fecha de nacimiento: </label> 
            <input type="date" name="fecha"><br>

            <label>Sube un archivo: </label><br>
            <input type="file" name="archivo1" id="archivo1" value="" /><br>
            <input type="file" name="archivo2" id="archivo2" value="" /><br>
            <br>
            <input type="submit" name="submit" value="Enviar archivo!" />
        </form>

        <?php
        // Si no esta vacio ni es null
        if (isset($_POST)) {
            // Bucle que recorre $_FILES, cada archivo y sus propiedades
            foreach ($_FILES as $archivo => $propiedades) {
                // Variables que almacenan las propiedades
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $fecha = $_POST['fecha'];
                $error = $_FILES[$archivo]['error'];
                $nameFile = $_FILES[$archivo]['name'];
                $tmp_name = $_FILES[$archivo]['tmp_name'];
                $fileSize = $_FILES[$archivo]['size'];
                // Variable que almacena la ruta al direcctorio donde moveremos los archivos subidos
                $dir = __DIR__ . "/archivos//" . $nameFile;
                // Si es igual a OK
                if ($error == UPLOAD_ERR_OK) {
                    // mueve el archivo
                    move_uploaded_file($tmp_name, $dir);
                    // muestra por pantalla
                    echo "<h3> Se ha enviado correctamente! </h3>";
                    echo "<br/> Nombre: " . $nameFile . "<br/>";
                    echo "<br/> Tamaño del archivo en bytes: " . $fileSize . "<br/>";
                // sino da ERROR!
                } else {
                    echo "ERROR!";
                }
            }
            // muestra por pantalla
            echo "<h3> Datos </h3>";
            echo "Nombre: " . $nombre . "/ Apellido: " . $apellido . "/ Fecha: " . $fecha . "<br/>";
            // muestra lo que contiene la variable global $_POST
            var_dump($_POST);
        }
        ?>
    </body>
</html>