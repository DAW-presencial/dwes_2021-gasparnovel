<?php
    // incluye y evalua el archivo 
    require 'database.php';
    // devuelve el valor de la conexion dentro de la clase Database
    $database = Database::getConnection();
    // $stmt representa una consulta
    $stmt = $database->query('SELECT nombre,apellido,telefono FROM contactos');
    // guarda en la variable row la fila de database
    while ($row = $stmt->fetch())
    {
        echo "<br>";
        echo $row['nombre'] . ", ".$row['apellido']. ", ".$row['telefono'];
        echo "<br>";
    }
?>