<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>CONTACTOS</title>
            <link rel="stylesheet" href="./css/styles.css">
        </head>
        <body>
            <?php

            // Incluye los archivos siguientes pero si no va, incluye un error
            require ('database/database.php');
            require ('class/contacto.php');

            // Creamos un objeto
            $db = new Database();

            // Condicional si los campos no estan vacios
            if (isset($_POST['nombre']) && isset($_POST['primer_apellido']) && isset($_POST['segundo_apellido']) && $_POST['telefono']) 
            {

                // Con los metodos eliminamos caracteres especiales en entidades HTML, filtramos el POST y lo guardamos en variables
                $nombre = htmlspecialchars(filter_input(INPUT_POST, 'nombre',));
                $primer_apellido = htmlspecialchars(filter_input(INPUT_POST, 'primer_apellido',));
                $segundo_apellido = htmlspecialchars(filter_input(INPUT_POST, 'segundo_apellido',));
                $telefono = trim($_POST['telefono']);
                // Creamos un nuevo contacto
                $contacto = new Contacto($db->getConnection(),$nombre, $primer_apellido, $segundo_apellido, $telefono);

                // Condicional si no esta vacio cuando pulsamos
                if (isset($_POST['agregar'])) 
                {   // Condicional si la cuenta del string es igual a 9
                    if(strlen($telefono) == 9)
                    {
                        echo $contacto->agregar();
                    } else 
                    {
                        echo " ERROR!, el telefono debe contener 9 digitos ";
                    }
                // Condicional si no esta vacio cuando pulsamos
                } else if (isset($_POST['actualizar'])) 
                    {
                        echo $contacto->actualizar();
                    // Condicional si no esta vacio cuando pulsamos
                    } else if (isset($_POST['eliminar'])) 
                    {
                        echo $contacto->eliminar();
                    }
                }
                // Condicional si no esta vacio cuando pulsamos
                if (isset($_POST['mostrar'])) 
                {   // Llama a la funcion estatica mostrar() de la clase Contacto
                    echo Contacto::mostrar();
                }
            ?>
                <a class="volver" href="index.php">Volver</a>
        </body>
    </html>


