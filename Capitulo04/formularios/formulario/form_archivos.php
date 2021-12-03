<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Post</title>
</head>

<body>
    <h1>Formulario Post para subir archivos</h1>
    <form method="post" enctype="multipart/form-data" action="subirArchivo.php">
        Nombre: <input type="text" name="nombre"><br>
        Añada el primer archivo: <input type="file" name="archivo1"><br>
        Añada el segundo archivo: <input type="file" name="archivo2"><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    // si no esta vacio cuando enviamos submit por post
    if (isset($_POST['submit'])) {
        // conveierte caracteres especiales en HTML
        $nombre = htmlspecialchars($_POST['nombre']);
        // printa
        echo "Bienvenido " . $nombre . "<br>";
        // bucle menor que la cuenta de los ficheros
        for ($i = 1; $i <= count($_FILES); $i++) {
            // se guarda el nombre del fichero y la extension temporal
            $fichero = $_FILES["fichero$i"]["tmp_name"];
            // se guarda el ultimo componente de una ruta
            $nombreArchivo = basename($_FILES["fichero$i"]["name"]);
            // si en files tiene el atributo error
            if ($_FILES["fichero$i"]['error']) {
                echo " El fichero $i no se ha enviado <br>";
            // sies diferente a la carga de la ruta 
            } else if (!move_uploaded_file($fichero, __DIR__ . "/$nombreArchivo")) {
                echo "Algo falló <br>";
            } else {
            // sino muestra echo
                echo "El fichero $i se subió correctamente <br>";
            }
            }
        // muestra que contiene la variable $_FILES
        echo "<pre>";
        var_dump($_FILES);
        echo "<pre>";
    }
    ?>
    <h4>Información de archivos</h4>
    <?php
    // bucle cuenta menor o igual
    for ($i = 1; $i <= count($_FILES); $i++) {
        // si no s vacio 
        if (isset($_FILES["fichero$i"])) {
            echo "Fichero $i <br>";
            echo "Nombre del fichero:" . $_FILES["fichero$i"]['name'] . "<br>";
            echo "Tipo del fichero:" . $_FILES["fichero$i"]['type'] . "<br>";
            echo "Tamaño del fichero:" . $_FILES["fichero$i"]['size'] . "<br>";
            echo "<br>";
        }
    }
    ?>

</body>

</html>