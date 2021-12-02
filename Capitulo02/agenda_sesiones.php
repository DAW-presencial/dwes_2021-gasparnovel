<!doctype html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Agenda de contactos</title>
    </head>
    <body>
        <?php
        
        // Comprueba o inicia una session con una coockie que dura 24 horas 86400
        session_start(['cookie_lifetime' =>86400]); 
        
        // Si la session esta vacia 
        if (!isset($_SESSION['agenda']))
        
        // Creamos la session agenda como un array vacío
        $_SESSION['agenda'] = array(); 
        
        // Si la request no esta vacio cuando se mande el submit
        if (isset($_REQUEST['submit']))
        {
            // variable que guarda nombre sin espacios
            $nuevo_nombre = trim($_REQUEST['nombre']);
            // variable que guarda telefono
            $nuevo_telefono = $_REQUEST['telefono'];
            // si nombre esta vacio 
            if (empty($nuevo_nombre))
                echo "<p style='color:red'>Debe introducir un nombre!!</p><br />";
                // si telefono esta vacio elimina la session agenda y el nombre
            elseif (empty($nuevo_telefono))
                unset($_SESSION['agenda'][$nuevo_nombre]);
            // si no esta vacio lo añade al array agenda 
            else 
                $_SESSION['agenda'][$nuevo_nombre] = $nuevo_telefono;
        }
        ?>

        <!-- Creamos el formulario de introducción de un nuevo contacto -->
        <h2>Nuevo contacto</h2>
        <form action="" method="get" >
            <!-- Metemos los contactos ya existentes ocultos en el formulario -->
            <div style="align-items: left">
                <label>Nombre:<input type="text" name="nombre"/></label><br />
                <label>Teléfono:<input type="text" name="telefono"/></label><br />
                <input type="submit" name='submit' value="Ejecutar"/><br />
            </div>
        </form>
        <br />

        <!-- Mostramos los contactos de la agenda -->
        <h2>Agenda</h2>
        <?php
        // variable que guarda la session 
        $agenda = $_SESSION['agenda'];
        // si la cuenta de la session es igual a 0 
        if (count($agenda) == 0)
            echo "<p>No hay contactos en la agenda.</p>";
        // si es mayor 
        else
        {
            echo "<ul>";
            // recorre el array agenda con la clave nombre y el valor telefono
            foreach ($agenda as $nombre => $telefono)
                echo "<li>" . $nombre . ': ' . $telefono . "</li>";
            echo "</ul>";
        }
        ?>        
    </body>
</html>