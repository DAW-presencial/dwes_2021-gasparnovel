<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Subiendo una foto</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style>
            .icono {
                width: 30%;
                margin: 10px auto;
                align: center;
            }
        </style>
    </head>
    <body>
            <?php
            // si no esta vacio coge el parametro subirfoto del metodo post
            if (isset($_POST["subirFoto"]))
            {
                    // llama al metodo
                processForm();
            }
            else
            {
                // llama al metodo
                displayForm();
            }

            // funcion que procesa el formulario
            function processForm()
            {
                // si no esta vacio el archivo subido y si error da ok
                if (isset($_FILES["photo"]) and ( $_FILES["photo"]["error"] == UPLOAD_ERR_OK))
                {
                    // condicional si es diferente a jpeg
                    if ($_FILES["photo"]["type"] != "image/jpeg")
                    {   // muestra el comentario 
                        echo "<p>Solo fotos JPEG, Gracias!</p>";
                    } // si es igual a jpeg pero diferente a la ruta  
                    elseif (!move_uploaded_file($_FILES["photo"]["tmp_name"], "photos/" . basename($_FILES["photo"]["name"])))
                    { // muestra el comentario
                        echo "<p>Lo siento. Ha habido un problema subiendo esta fofo.</p>" . $_FILES["photo"]["error"];
                    }
                    else
                    { // llama al metodo
                        displayThanks();
                    }
                }
                // si no esta ok o esta vacio hace un switch con diferentes problemas
                else
                {
                    switch ($_FILES["photo"]["error"])
                    {
                        case UPLOAD_ERR_INI_SIZE:
                            $message = "La foto es de un tamaño mayor de lo que permite el servidor.";
                            break;
                        case UPLOAD_ERR_FORM_SIZE:
                            $message = "La foto es de un tamaño mayor de lo que permite el script.";
                            break;
                        case UPLOAD_ERR_NO_FILE:
                            $message = "No se ha subido ningun archivo. Asegúrese de que ha elegido un archvivo para subir.";
                            break;
                        default:
                            $message = "Por favor, contacte con el administrador del servidor para ayuda.";
                    }
                    echo "<p>Lo siento, ha habido un problema subiendo esta foto. $message</p>";
                }
            }
            // funcion que crea el formulario
            function displayForm()
            {
                ?>
                <h1>Subiendo una foto</h1>

                <p>Por favor entra tu nombre y elije una foto para subir, luego haz click en Subir foto.</p>

                <form action="" method="post" enctype="multipart/form-data">
                    <div style="width: 30em;">
                        <!--<input type="hidden" name="MAX_FILE_SIZE" value="5000" /> -->

                        <label for="visitorName">Tu nombre</label>
                        <input type="text" name="visitorName" id="visitorName" value="" />

                        <label for="photo">Tu foto</label>
                        <input type="file" name="photo" id="photo" value="" />

                        <div style="clear: both;">
                            <input type="submit" name="subirFoto" value="Subir foto" />
                        </div>

                    </div>
                </form>
                <?php
            }
            // funcion que da informacion si se ha completado la funcion de processForm()
            function displayThanks()
            {
                ?>
                <h1>Enhorabuena</h1>
                <p>Gracias por subir tu foto<?php if ($_POST["visitorName"])
            {
                echo ", " . $_POST["visitorName"];
            } ?>!</p>
                <p>Esta es tu foto:</p>
                <p><img class='icono' src="photos/<?php echo $_FILES["photo"]["name"] ?>" alt="Photo" /></p>
                <?php
            }
            ?>

        </body>
    </html>